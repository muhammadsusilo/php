<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Silo");
var_dump($company);

$company->programmer = new BackendProgrammer("Silo");
var_dump($company);

$company->programmer = new FrontendProgrammer("Silo");
var_dump($company);

sayHelloProgrammer(new Programmer("Silo"));
sayHelloProgrammer(new BackendProgrammer("Silo"));
sayHelloProgrammer(new FrontendProgrammer("Silo"));



