<?php  
require_once 'rectangle.php';
require_once 'square.php';


$rectangle1 = new Rectangle(3,7);
$rectangle2 = new Rectangle(1,4);
$rectangle3 = new Rectangle(10,5);

echo $rectangle1->area() . PHP_EOL;

echo $rectangle2->area() . PHP_EOL;

echo $rectangle3->area() . PHP_EOL;

$square = new Square(3);

echo $square->area() . PHP_EOL;

echo $square->perimeter() . PHP_EOL;


?>