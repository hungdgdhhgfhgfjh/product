<?php
include_once "product.php";
include_once "productmaneger.php";
$objProductManeger=new ProductManeger();
$objProductManeger->add(new Product("laptop"));
$objProductManeger->add(new Product("mobile"));
$products=$objProductManeger-getProducts();
foreach($products as $product) {
    echo $product->getName() ."<br/>";
}