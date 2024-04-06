<?php

namespace Data\Traits;

trait SayGoodBye
{
   public string $name;

   public function goodBye(?string $name): void
   {
      if(is_null($name)){
         echo "Good Bye\n";
      }else{
         echo "Good bye $name";
      }
   }

}
trait SayHello
{
   public string $name;

   public function hello(?string $name): void
   {
      if(is_null($name)){
         echo "Hello\n";
      }else{
         echo "Hello $name";
      }
   }

}

trait HasName
{
   public string $name;
}

trait CanRun
{
   public abstract function run(): void;
}

class ParentPerson {
   public function goodBye(?string $name): void
   {
      echo "Good bye in Person" . PHP_EOL;
   }

   public function hello(?string $name): void
   {
      echo "Hello in Person". PHP_EOL;
   }
}

trait All
{

   use SayGoodBye, SayHello, HasName, CanRun{
      // bisa di overide
      // hello as private;
      // goodBye as Private;
   }

}


class Person extends ParentPerson
{
   use All;
   
   public function run():void
   {
      echo"Person $this->name is running". PHP_EOL;
   }
}

