<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "silo";
$password = "rahasia";

$sql = "SELECT * FROM admin where username =? and password =?";
$statement = $connection->prepare($sql);
$statement->execute([$username, $password]);

$success= false;
$find_user = null;
foreach ($statement as $row){
   // suskses
    $success = true;
    $find_user = $row["username"];
}

if ($success){
   echo "Sukses login : " . $find_user . PHP_EOL;
}else {
   echo "Gagal login" . PHP_EOL;
}

$connection = null;

