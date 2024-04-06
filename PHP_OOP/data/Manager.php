<?php

class Manager {

   var string $name;

   var string $title;

   public function __construct(string $name= "", string $title = "Manager"){
      $this->name = $name;
      $this->title = $title;
   }

   // void tidak mengembalikan value
   function sayHello(string $name): void
   {
      echo "Hi $name, my name is Manager $this->name\n";
   }
}

class vicePresident extends Manager
{

   public function __construct(string $name = "")
   {
      // tidak wajib, tetapi di rekomendasikan
      parent::__construct($name, "VP" );
   }

   function sayHello(string $name): void
   {
      echo "Hi $name, my name is VP $this->name\n";
   }

}



