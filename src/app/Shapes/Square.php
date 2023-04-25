<?php 

namespace App\Shapes;

class Square implements ShapeInterface {
    public $width;
    public $height;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area() {
        return $this->width * $this->height;
    }
}