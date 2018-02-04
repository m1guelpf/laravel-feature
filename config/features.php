<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Features
    |--------------------------------------------------------------------------
    |
    | Here you may specify the features you'd like to toggle in your
    | application. You can either toggle the full feature, toggle
    | only a specific part like routes or views or toggle each
    | component separately.
    |
    */

    'feature1' => [

        'views' => true,

        'routes' => [
            'route1' => true,
        ],
    ],

    'feature2' => false,

    'feature3' => [
        'subfeature1' => true,
        'subfeature2' => [
            'routes' => false,
            'views'  => true,
        ],
    ],

];
