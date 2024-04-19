<?php

require_once __DIR__ . "/GetConnection.php";


$connection = getConnection();

$sql = "SELECT id,name,email FROM customers";
$statement = $connection->query($sql);

foreach ($statement as $row) {
   // var_dump($row);
   $id =  $row[0];
   $name =  $row["name"];
   $email =  $row["email"];

   // echo $id. " ". $name. " ". $email. PHP_EOL;
   echo "id : $id" . PHP_EOL;
   echo "name : $name" . PHP_EOL;
   echo "email : $email" . PHP_EOL;
}




$connection = null;


