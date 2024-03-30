<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Budi";
$person->sayHello("MSusilo");

$person = new Person();
$person->name = "Silo";
$person->sayHello(null);
