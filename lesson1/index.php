<?php
class A{
    public $some_property;

    function some_method(){
        echo "This method is defined inside class A .$this->some_property";
    }
}


class B extends A{
    public $some_other_property;

    function some_other_method(){
        echo "$this->some_other_property";
    }
}


$b = new B();
$b->some_property = 'Hello';
$b->some_method();
$b->some_other_property = 'World';
$b->some_other_method();
?>