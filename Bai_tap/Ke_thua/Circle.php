<?php
class Circle
{
public $radius;
public $name;

public function __construct($name,$radius)
{
$this->name=$name;
$this->radius = $radius;
}


public function Area()
{
return pi()*($this->radius*$this->radius);
}
}
