<?php

namespace M1guelpf\Feature;

use Illuminate\Support\Facades\Facade;

/**
 * @see \M1guelpf\Feature\FeatureManager
 */
class FeatureFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'feature';
    }
}
