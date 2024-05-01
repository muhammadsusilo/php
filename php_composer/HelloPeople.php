<?php 

require_once __DIR__ . "/vendor/autoload.php";

use Muhammadsusilopzn\Data\People;

$people = new People("Silo");

echo $people->sayHello("Susi") . PHP_EOL;