# Feature toggling for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/m1guelpf/laravel-feature.svg?style=flat-square)](https://packagist.org/packages/m1guelpf/laravel-feature)
[![Build Status](https://img.shields.io/travis/m1guelpf/laravel-feature/master.svg?style=flat-square)](https://travis-ci.org/m1guelpf/laravel-feature)
[![Quality Score](https://img.shields.io/scrutinizer/g/m1guelpf/laravel-feature.svg?style=flat-square)](https://scrutinizer-ci.com/g/m1guelpf/laravel-feature)
[![Total Downloads](https://img.shields.io/packagist/dt/m1guelpf/laravel-feature.svg?style=flat-square)](https://packagist.org/packages/m1guelpf/laravel-feature)

Disable and enable features in your application using Laravel Feature.

## Installation

You can install the package via composer:

```bash
composer require m1guelpf/laravel-feature
```

The package will automatically register itself.

Then, you'll need to publish the config file with:

``` bash
php artisan vendor:publish --provider="M1guelpf\Feature\FeatureServiceProvider"
```

## Usage

You can check if a feature is enabled both by using the helper or the Facade:
``` php
Feature::enabled('a-feature'); //true
feature('a-feature'); //true
```

You can also define feature routes:
``` php
Route::get('whatever', 'SomeController@index')->name('whatever')->feature('a-feature');
```

Or use features on Blade:
``` blade
@feature('a-feature')
    Some feature related-text
@endfeature
```

### Testing

``` bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email soy@miguelpiedrafita.com instead of using the issue tracker.

## Credits

- [Miguel Piedrafita](https://github.com/m1guelpf)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
