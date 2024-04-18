<?php

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_CLASS)]
class NotBlank{

}

#[Attribute(Attribute::TARGET_PROPERTY)]
class Length
{  
   public int $min;
   public int $max;

   public function __construct(int $min, int $max)
   {
      $this->min = $min;
      $this->max = $max;
   }
}


class LoginRequest
{
   #[Length(min: 4, max: 8)]
   #[NotBlank]
   public ?string $username;

   #[Length(min: 6, max: 8)]
   #[NotBlank]
   public ?string $password;
}


function validate (object $object):void{
   $class = new ReflectionClass($object);
   $properties = $class->getProperties();
   foreach ($properties as $property) {

      validateNotBlack($property, $object);
      validateLength($property, $object);
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

function validateLength(ReflectionProperty $property , object $object)
{

   if (!$property->isInitialized($object) || $property->getValue($object) == null){
      return;
   }
   $value = $property->getValue($object);
   $attributes = $property->getAttributes(Length::class);
   foreach($attributes as $attribute)
      $length =$attribute->newInstance();
      $valuelength = strlen($value);
      if ($valuelength < $length->min)
         throw new Exception("Property $property->name is too short");
      if ($valuelength > $length->max)
         throw new Exception("Property $property->name is too long");

}

$request = new LoginRequest();
$request->username = "silo";
$request->password = "rahasia";
validate($request);


