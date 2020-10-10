<?php
include_once "Shape.php";

class Circle extends Shape
{
    public $radius;

    public function __construct($radius, $name)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function Area()
    {
        return  pi()* ($this->radius * $this->radius);
    }

    public function Perimeter()
    {
        return 2 * pi() * $this->radius;
    }

}

include_once "Circle.php";

class Cylinder extends Circle
{
    public $height;


    public function __construct($radius,$name,$height)
    {
        parent::__construct($radius,$name);
        $this->height = $height;
    }
    public function Area(){
        return $this->height*parent::Perimeter()+(2*parent::Area());
    }
    public function Volume(){
        return parent::Area()*$this->height;
    }
}