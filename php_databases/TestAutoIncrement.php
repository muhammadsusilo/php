<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->exec("insert into comments(email, comment) values('silo@gmail.com', 'Hi my name ')");
// mengambil id terakhir 
$id = $connection->lastInsertId();

echo $id . PHP_EOL;


$connection = null;

