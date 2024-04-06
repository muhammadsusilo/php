<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Silo\n");
$person->hello("Silo\n");

$person->name= "Silo";
var_dump($person);

$person->run();

