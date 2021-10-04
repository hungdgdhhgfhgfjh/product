<?php

class ProductManeger
{
    private $products = [];
    public function __construrt()
    {
        // 
    }
    public function add($item)
    {
        array_push($this->products, $item);
    }
    public function getProducts()
    {
        return $this->products;
    }
}





