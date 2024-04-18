<?php

class Example {
   public string|int|bool|array $data;
}

$example = new Example();
$example->data = 123;
$example->data = "SILO";
$example->data = true;
$example->data = [];

function sampleFunction(string|array $data): string|array
{
   if(is_array($data)){
      return ["Array"];
   } elseif (is_string($data)){ 
      return "String" ;
   }
   
}

var_dump(sampleFunction(["Silo","Muhammad"]));
// var_dump(sampleFunction(123));
var_dump(sampleFunction("Silo"));