<?php

require_once "data/Person.php";

$person = new Person("Budi","Tegal");
$person->name = "Budi";
$person->sayHello("MSusilo");

$aku = new Person("Budi","Tegal");
$aku->name = "Silo";
$aku->sayHello(null);

$person->info();
$aku->info();

