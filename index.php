<?php

require_once 'Circle.php';
require_once 'Rectangle.php';

$circle = new Circle(5);
echo "Area of Circle: " . $circle->area() . "\n";

$rectangle = new Rectangle(4, 6);
echo "Area of Rectangle: " . $rectangle->area() . "\n";
