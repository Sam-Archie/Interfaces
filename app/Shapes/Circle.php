<?php

namespace App\Shapes;

class Circle implements ShapeInterface
{
    private float $radius; 

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function area() : float
    {
        return pi() * ($this->radius * $this->radius);
    }
}