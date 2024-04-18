<?php

function validate(string $value)
{
   if(trim($value) == ""){
      throw new Exception("Invalid string");
   }
}
try {
   validate("  ");
   // PHP 8 bisa menghapus variable exception jika tidak di perlukan
} catch(Exception){
   echo "Invalid" . PHP_EOL;
}
