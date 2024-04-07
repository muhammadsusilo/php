<?php

$array = [
   "FirstName" => "Muhammad",
   "LastName"=>"Susilo",
];

// $array["FirtName"] mengakses array
// mengakses objek

$object = (object) $array;
var_dump($object);

echo "FirstName $object->FirstName" . PHP_EOL;
echo "LastName $object->LastName" . PHP_EOL;

$arrayLagi = (array) $object;
var_dump($arrayLagi);


require_once "data/Person.php";


$person = new Person("Silo", "Tegal");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);
