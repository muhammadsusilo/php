<?php

class Product
{
   public function __construct(
    public string $id,
    public string $name,
    private string $price,)
   {
   }
}

$product = new Product(id:"1", name:"Laptop Lenovo",price: 200);
var_dump($product);

echo $product->name . PHP_EOL;
