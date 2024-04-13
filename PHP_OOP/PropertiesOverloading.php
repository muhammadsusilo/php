<?php

class Zero
{

   private array $properties = [];
   public function __get($name)
   {
      echo "Access property $name" . PHP_EOL;
      return "CONTOH";

   }
   
   public function __set($name, $value)
   {
      echo"Set access property $name with value" . PHP_EOL;
   }
}

$zero = new Zero();
// echo $zero->firstName . PHP_EOL;
$zero->firstName = "Silo";