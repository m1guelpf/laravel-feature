<?php

namespace M1guelpf\Skeleton\Tests;

use PHPUnit\Framework\TestCase;
use M1guelpf\Feature\FeatureManager;

class FeatureTest extends TestCase
{
    /** @test */
    public function you_can_define_a_feature()
    {
        $featureManager = new FeatureManager([
            'feature1' => true,
            'feature2' => false,
        ]);

        $this->assertTrue($featureManager->enabled('feature1'));
        $this->assertFalse($featureManager->enabled('feature2'));
    }

    /** @test */
    public function you_can_use_closures()
    {
        $featureManager = new FeatureManager([
            'feature1' => function () {
                return true;
            },
        ]);

        $this->assertTrue($featureManager->enabled('feature1'));
    }
}
