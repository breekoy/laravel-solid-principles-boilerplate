<?php

namespace App\AreaCalculator;

use App\Shapes\Circle;

class AreaCalculator {
    public function calculate ($shape) {
        return $shape->area();
    }
}