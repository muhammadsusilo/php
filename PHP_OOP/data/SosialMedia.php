<?php

class SosialMedia
{
   public string $name;
}

class Facebook extends SosialMedia
{

  final public function login(string $username, string $password):bool
   {
      return true;
   }

}
// final class tidak bisa di turunkan 
// final function tidak bisa di overide
// error
class FakeFacebook extends Facebook
{

   // public function login(string $username, string $password):bool
   // {
   //    return false;
   // }

}
