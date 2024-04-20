<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('muhammad@gmail.com', 'muhammad')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('muh@gmail.com', 'Hi Muh')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('sus@gmail.com', 'Hi Sus')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('silo@gmail.com', 'Hi Silo')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('sil@gmail.com', 'Hi Sil')");

$connection->commit();

$connection = null;

