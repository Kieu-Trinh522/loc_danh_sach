<?php
class Person{
    protected $name;
    protected function set_name($new_name) {
        if ($new_name != "Jimmy Two Guns") {
            $this->name = strtoupper($new_name);
        }
    }
}

class Employee extends Person
{
    protected function set_name($new_name)
    {
        if ($new_name == "Stefan Sucks") {
            $this->name = $new_name;
        }
    }
}
?>
