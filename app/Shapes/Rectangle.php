<?php

namespace App\Shapes;

class Rectangle implements ShapeInterface
{
    private float $height;
    private float $width;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() : float
    {
        return $this->width * $this->height;
    }
}