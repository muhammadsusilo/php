<?php


require_once "data/Conflict.php";
require_once "data/Helper.php";

// use untuk memilih
use Data\One\Conflict;
use function Helper\HelpMe;
use const Helper\APPLICATION;

$conflict1 = new conflict();
$conflict2 = new Data\Two\Conflict();

helpMe();

echo APPLICATION ;
