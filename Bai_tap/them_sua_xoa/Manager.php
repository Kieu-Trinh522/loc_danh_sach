<?php


class Manager
{
private $edit;
private $delete;
private $add;


    public function __construct($edit, $delete, $add)
    {
        $this->edit = $edit;
        $this->delete = $delete;
        $this->add = $add;
    }


    public function getEdit()
    {
        return $this->edit;
    }


    public function getDelete()
    {
        return $this->delete;
    }


    public function getAdd()
    {
        return $this->add;
    }



}