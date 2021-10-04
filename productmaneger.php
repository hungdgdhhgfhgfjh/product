<?php
class ProductManeger{
    private $products;
    public function __construrt($products) {
        $this->products = [];
    }
    public function add($products) {
        $this->products[]=$products;
    }
}