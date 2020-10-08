<?php


class Rectangle
{
    private $width;
    private $height;

    public function __construct($width,$height)
    {
        $this->height=$height;
        $this->width=$width;
    }
    public function getArea(){
        return $this->width*$this->height;
    }
    public function getPerimeter(){
        return ($this->height+$this->width)*2;
    }
    public function display(){
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
