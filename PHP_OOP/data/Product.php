<?php

class Product {
   protected string $name;
   protected int $price;

   // kalau mau di akses oleh sendiri/ dalam class sendiri maka pakai private,
   // kalau mau di akses orang lain pakai protected
   public function __construct(string $name, int $price)
   {
      $this->name = $name;
      $this->price = $price;
   }

   public function getName(): string
   {
      return $this->name;
   }
   public function getPrice(): int
   {
      return $this->price;
   }
   
}

class ProductDummy extends Product
{

   public function info() {
      echo "Name $this->name" . PHP_EOL;
      echo "Price $this->price" . PHP_EOL;
   }

}