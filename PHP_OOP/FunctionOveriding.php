<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Andi";
$manager->sayHello("Silo");


$vp = new vicePresident();
$vp->name = "Silo";
$vp->sayHello("warsono");

