<?php
include_once "Point.php";
include_once "MoveablePoint.php";
$point=new Point(5,2);
echo $point->getXY().'<br>';
print_r($point->getXY()).'<br>';
$moveablePoint=new MoveablePoint(5,2);
print_r($moveablePoint->getSpeed());

echo $point;