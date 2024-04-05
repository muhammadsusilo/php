<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Silo";
$manager->sayHello("Andi");

$vp = new vicePresident();
$vp->name = "Silo";
$vp->sayHello("Joko");