<?php

require_once "data/Product.php";

$product = new Product("apple", 20000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new productDummy("Jeruk",5000);

echo $dummy->info() . PHP_EOL;

