<?php

class Manager {

   var string $name;

   // void tidak mengembalikan value
   function sayHello(string $name):void
   {
      echo "Hi $name, my name is $this->name\n";
   }
}

class vicePresident extends Manager{

   

}