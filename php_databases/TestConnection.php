<?php

// bisa menggunakan ip addres jika databasenya tidak di laptonya sendiri
$host ="localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "root";

try{
   $connection = new PDO("mysql:host=$host:$port;dbname=$database",$username, $password);
   echo "Sukses terkoneksi ke database Mysql" . PHP_EOL;

   // menutup koneksi
   $connection = null;
}catch (PDOException $exception){
   echo "Gagal Terkoneksi ke database Mysql" . $exception->getMessage() . PHP_EOL;
}




