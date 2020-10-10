<?php
include_once "Cylinder.php";
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";
$cylinder = new Cylinder(6, 'Cylinder 01', 9);
echo "Dien tich hinh tru la: " . $cylinder->Area() . "<br>";
echo "The tich hinh tru la: " . $cylinder->Volume() . "<br>";
$circle = new Circle(6, 'Circle 01');
echo "Dien tich hinh tron la: " . $circle->Area() . "<br>";
echo "Chu vi hinh tron la: " . $circle->Perimeter() . "<br>";
$rectangle = new Rectangle('Rectangle 01', 6, 3);
echo "Dien tich hinh chu nhat la: " . $rectangle->Area() . "<br>";
echo "Chu vi hinh chu nhat la: " . $rectangle->Perimeter() . "<br>";
$square = new Square('Square', 3);
echo "Dien tich hinh vuong la: " . $square->Area() . "<br>";
echo "Chu vi hinh vuong la: " . $square->Perimeter();
