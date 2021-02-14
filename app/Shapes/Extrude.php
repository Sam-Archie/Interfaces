<?php

namespace App\Shapes;

class Extrude
{
    
    private ShapeInterface $shape;
    private float $depth;

    public function __construct(ShapeInterface $shape, float $depth)
    {
        $this->shape = $shape;
        $this->depth = $depth;
    }

    public function volume() : float
    {
        return $this->shape->area() * $this->depth;
    }

}