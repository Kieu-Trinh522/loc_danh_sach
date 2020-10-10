<?php
include_once"Circle.php";
include_once"Cylinder.php";

$circle=new Circle('Circle 01',5);
echo "Dien tich hinh tron la; ".$circle->Area().'<br>';
$cylinder=new Cylinder('Cylinder',5,8);
echo "The tich hinh tru la: ".$cylinder->Volume();
