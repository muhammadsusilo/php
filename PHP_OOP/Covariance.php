<?php

require_once "data/Food.php";
require_once "data/AnimalShelter.php";
require_once "data/Animal.php";


$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Luna");
$cat->eat(new \Data\AnimalFood());

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("Lili");
$dog->eat(new \Data\Food());





