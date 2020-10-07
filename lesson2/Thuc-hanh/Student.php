<?php


class Student
{
   protected $name;
   protected $age;

     function __construct($name,$age)
    {
       $this->name = $name;
       $this->age = $age;
    }
}
$student = new Student("tr",18);
