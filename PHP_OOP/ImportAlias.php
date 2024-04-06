<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// use untuk memilih
use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\HelpMe as help;
use const Helper\APPLICATION as app;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

help();

echo app ;
