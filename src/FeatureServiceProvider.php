<?php

namespace M1guelpf\Feature;

use Illuminate\Support\ServiceProvider;

class FeatureServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param FeatureManager $feature
     *
     * @return void
     */
    public function boot(FeatureManager $feature)
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/features.php' => config_path('features.php'),
            ], 'config');
        }

        if (class_exists(\Illuminate\Routing\Route::class)) {
            \Illuminate\Routing\Route::macro('feature', function (string $name, string $function = '') use ($feature) {
                feature($name, empty(trim($function)) ? 'routes' : "routes.$function") ? null : $this->uses(FeatureDisabledController::class);
            });
        }

        if (class_exists(\Illuminate\Support\Facades\Blade::class)) {
            \Illuminate\Support\Facades\Blade::if('feature', function (string $name, string $function = '') {
                return feature($name, empty(trim($function)) ? 'views' : "views.$function");
            });
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/features.php', 'feature');
        
        $this->app->singleton('feature', function ($app) {
            return new FeatureManager(config('features') ?? []);
        });

        $this->app->alias('feature', FeatureManager::class);
    }
}
