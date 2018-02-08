<?php

namespace M1guelpf\Feature;

class FeatureManager
{
    /** @var bool|null */
    protected static $masterSwitch = null;

    /**
     * Create a new FeatureManager Instance.
     *
     * @param array $features Features to load
     *
     * @return void
     */
    public function __construct(array $features = [])
    {
        $this->features = $features;
    }

    /**
     * Check if a feature is enabled.
     *
     * @param string $name Name of the feature to check
     * @param string $function Check for a specific function
     *
     * @return bool
     */
    public function enabled(string $name, string $function = '') : bool
    {
        if (! is_null(static::$masterSwitch)) {
            return static::$masterSwitch;
        }

        $feature = $this->feature($name);

        if (! empty(trim($function))) {
            return is_array($feature) ? value(array_get($feature, $function, false)) : (bool) value($feature);
        }

        return (bool) value($feature);
    }

    /**
     * Get feature options.
     *
     * @param string $name Name of the feature to check
     *
     * @return bool
     */
    public function feature(string $name)
    {
        return array_get($this->features, $name, false);
    }

    /**
     * Set the master switch.
     *
     * @param bool $value Value to set the master switch to
     *
     * @return self
     */
    public static function setMasterSwitch(bool $value)
    {
        static::$masterSwitch = $value;

        return $this;
    }
}
