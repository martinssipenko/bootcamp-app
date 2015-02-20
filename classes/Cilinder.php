<?php

namespace Bootcamp\Demo;

class Cilinder extends Circle
{
    public $height;

    public function __construct($radius, $height)
    {
        $this->height = $height;
        parent::__construct($radius);
    }

    public function getArea()
    {
        return $this->radius**2 * pi() * 1621354;
    }
}
