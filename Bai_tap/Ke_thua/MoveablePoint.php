<?php
include_once "Point.php";

class MoveablePoint extends Point
{
public $xSpeed;
public $ySpeed;


    public function __construct($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }


    public function getXSpeed()
    {
        return $this->xSpeed;
    }


    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }


    public function getYSpeed()
    {
        return $this->ySpeed;
    }


    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed(){
        return [$this->xSpeed,$this->ySpeed];
    }
    public function setSpeed($xSpeed,$ySpeed){
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;
    }

}