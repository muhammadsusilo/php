<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('khairi@gmail.com', 'khairi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('khairi@gmail.com', 'khairi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('khairi@gmail.com', 'khairi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('khairi@gmail.com', 'khairi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('khairi@gmail.com', 'khairi')");

$connection->rollBack();

$connection = null;

