<?php

namespace M1guelpf\Feature;

use Illuminate\Routing\Controller;

class FeatureDisabledController extends Controller
{
    public function __invoke(...$args)
    {
        abort(404);
    }
}
