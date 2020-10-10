<?php
include_once"Circle.php";
class Cylinder extends Circle
{
    public $height;


    public function __construct($name,$radius,$height)
    {
        parent::__construct($name,$radius);
        $this->height = $height;
    }
    public function Volume(){
        return $this->height* 2*pi()*$this->radius+2*parent::Area();
    }
}

