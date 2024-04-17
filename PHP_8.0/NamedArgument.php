<?php

function sayHello(string $first, string $middle = "", string $last): void
{
   echo "Hello $first $middle $last" . PHP_EOL;
}



sayHello("Muhammad","Susilo", "silo");
// sayHello("Muhammad","Susilo"); Error

sayHello(last: "Susilo" , middle: "silo",first: "Muhammad");
sayHello(first:"Muhammad", last: "Susilo");


