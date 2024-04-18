<?php

class Manager{
   private function test(): void
   {

   }
}

class VicePresident extends Manager{
   // boleh sama test dengan manager walaupun private
   public function test(string $name):string
   {
      return "VP";
   }
}

