<?php

namespace Bootcamp\Demo;

class Circle extends Shape
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return $this->radius**2 * pi();
    }
}
