<?php

use M1guelpf\Feature\FeatureFacade as Feature;

/**
 * Wether a feature is enabled.
 *
 * @param string $name
 * @param string $function
 *
 * @return bool
 */
function feature(string $name, string $function = '') : bool
{
    return Feature::enabled($name, $function);
}
