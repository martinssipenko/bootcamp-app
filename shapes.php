<?php


spl_autoload_register(function ($className) {
  var_dump($className);
    require 'classes/'.$className.'.php';
});


$rect = new Rectangle(4, 3);
$circle = new Circle(1);
// $circle = new Cilinder(1, 5);


var_dump(
  $rect->getArea(),
  $circle->getArea()
);
