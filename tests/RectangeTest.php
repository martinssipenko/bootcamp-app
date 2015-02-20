<?php

use Bootcamp\Demo\Rectangle;

class RectangleTest extends PHPUnit_Framework_TestCase
{
    public function testSomething()
    {
        $r = new Rectangle(4,3);
        $this->assertEquals(12, $r->getArea());
    }
}
