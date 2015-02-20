<?php

require 'vendor/autoload.php';

use Bootcamp\Demo\Rectangle;

$app = new Silex\Application();

$app->get('/hello/{name}', function ($name) use ($app) {
  $r = new Rectangle(4,3);
  return $r->getArea();
});

$app->run();
