<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "muhammadsusilo";
$password = "silo1234";

$sql = "INSERT INTO admin(username, password) VALUES (:username, :password)";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();



$connection = null;

