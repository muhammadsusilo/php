<?php

$value ="E";
$result = "";

switch ($value) {
   case "A":
   case "B":
   case "C":
   $result = "Anda Lulus ";
   break;
   case "D":
   $result = " Anda Tidak Lulus";
   break;
   case "E":
   $result = "Mungkin anda salah jurusan";
   break;
   default:
   $result = "Pastikan yang dimasukkan nilai benar";
}

echo $result . PHP_EOL;

$result = match ($value){
   "A","B","C" => "Anda Lulus",
   "D" => " Anda Tidak Lulus",
   "E" => "Mungkin anda salah jurusan",
   default => "Pastikan yang dimasukkan nilai benar",
};

echo $result . PHP_EOL;

// match expression non equals

$value = 80;

$result = match(true){
   $value >= 80 => "A",
   $value >= 70 => "B",
   $value >= 60 => "C",
   $value >= 50 => "D",
   default => "E",
};

echo $result . PHP_EOL;

$name = "Mrs. Nani";

$result = match(true){
   str_contains($name, "Mr.") => "Hello Sir $name",
   str_contains($name, "Mrs.") => "Hello Mom $name",
   default => "Hello",
};

echo $result . PHP_EOL;