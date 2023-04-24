<?php

namespace App\AreaCalculator;

class AreaCalculator {
    public function calculate ($square) {
        return $square->width * $square->height;
    }
}