<?php
include_once "Point2D.php";
include_once "Point3D.php";
$point2d=new Point2D(2,5);
echo $point2d->getXY().'<br>';
print_r($point2d->getXY()).'<br>';
$point3d=new Point3D(2,5,2);
echo $point3d->getXYZ().'<br>';
print_r($point3d->getXYZ());