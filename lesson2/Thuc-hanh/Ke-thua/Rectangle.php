<?php


class Rectangle extends Shape
{
    public $width;
    public $height;


    public function __construct($name,$width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function Area(){
        return $this->height*$this->width;
    }
    public function Perimeter(){
        return ($this->height+$this->width)*2;
    }
}
include_once"Rectangle.php";
class Square extends Rectangle{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }

}