<?php

class Person
{
   const AUTHOR = "Belajar di Programmer Zaman Now";

   var string $name;
   var ?string $address = null;
   var string $country = "Jawa Tengah - Indonesia";

   function sayHello(?string $name)
   {
      if(is_null($name)){
         echo "Hi, my Name is $this->name" . PHP_EOL;
      }else{
         echo "Hi $name, my Name is $this->name" . PHP_EOL;
      }
   }

   function info()
   {
      echo "Author : " . self::AUTHOR . PHP_EOL;
   }
}