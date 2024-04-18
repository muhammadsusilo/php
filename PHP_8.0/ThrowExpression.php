<?php

function sayHello(?string $name)
{
   if($name == null){
      throw new Exception("Tidak boleh null");
   }
   echo "Hello $name" . PHP_EOL;
}

function sayHelloExpression(?string $name)
{
   $result = $name != null ? "Hello $name" : throw new Exception("Tidak bole null");
   echo "Hello $name" . PHP_EOL;
}

sayHello("silo");
sayHelloExpression("Muhammad Susilo");

