<?php

class Data implements IteratorAggregate
{

   var string $first = "First";
   public string $second = "Second";
   private string $thrid = "Thrid";
   protected string $forth = "Forth";

   // public function getIterator()
   // {
   //    $array = [
   //       "first" => $this->first,
   //       "second" => $this->second,
   //       "thrid" => $this->thrid,
   //       "forth" => $this->forth,
   //    ];

   //    return new ArrayIterator($array);
   // }

   public function getIterator()
   {
         yield "first" => $this->first;
         yield "second" => $this->second;
         yield "thrid" => $this->thrid;
         yield "forth" => $this->forth;
   }
}

$data = new Data();

foreach ($data as $property => $value) 
{

   echo "$property : $value" . PHP_EOL ;

}

