<?php

#[Attribute]
class NotBlank{

}

class LoginRequest
{
   #[NotBlank]
   public string $username;

   #[NotBlank]
   public string $password;
}


function validate (object $object):void{
   $class = new ReflectionClass($object);
   $properties = $class->getProperties();
   foreach ($properties as $property) {

      validateNotBlack($property, $object);

   }
}

function validateNotBlack(ReflectionProperty $property , object $object)
{

   $attributes = $property->getAttributes(NotBlank::class);
   if (count($attributes) > 0) {
      if(!$property->isInitialized($object))
         throw new Exception("Property $property->name is null");
      if($property->getValue($object) == null)
         throw new Exception("Property $property->name is null");

   }

}
