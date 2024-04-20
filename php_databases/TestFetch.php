<?php

require_once __DIR__ . "/GetConnection.php";


$connection = getConnection();

$username = "silo";
$password = "rahasia";

$sql = "SELECT * FROM admin where username =:username and password =:password";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

if($row = $statement->fetch()){
   echo "Sukses login : " . $row["username"] . PHP_EOL;
}else {
    echo "Gagal login" . PHP_EOL;
}

var_dump($statement->fetch());

// $success= false;
// $find_user = null;
// foreach ($statement as $row){
//    // suskses
//     $success = true;
//     $find_user = $row["username"];
// }

// if ($success){
//    echo "Sukses login : " . $find_user . PHP_EOL;
// }else {
//    echo "Gagal login" . PHP_EOL;
// }

$connection = null;


