<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "Silo";
$request->password = "Rahasia";
// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public ?string $username;
    public ?string $password;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->username = "Silo";
$register->password = "abcdefg";
$register->email = "silo@gmail.com";



ValidationUtil::validateReflection($register);
