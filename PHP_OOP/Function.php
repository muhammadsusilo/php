<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Budi";
$person->sayHello("MSusilo");

$aku = new Person();
$aku->name = "Silo";
$aku->sayHello(null);

$person->info();
$aku->info();

