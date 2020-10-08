<?php
    include"Rectangle.php";
    $width=10;
    $height=20;
    $Rec= new Rectangle($width,$height);

    echo $Rec->getPerimeter();
    echo $Rec->getArea();
    echo  $Rec->display();

