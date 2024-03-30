<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Muhammad Susilo";
$person->address = "Tegal";
// $person->country ="Indonesia";

var_dump($person);

echo "Name : $person->name\n" ;
echo "Address : $person->address\n" ;
echo "Country : $person->country\n" ;

$person->sayHello("Budi");
// error
// $person->name=[];