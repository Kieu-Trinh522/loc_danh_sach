<?php
namespace Services;


class ProductManager
{
    private $products;


    public function __construct()
    {
        $this->products = [];
    }

    public function getProducts()
    {
        return $this->products;
    }
    public function add($products){
        $this->products[]=$products;
    }


}