<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";
// validateLoginRequest($loginRequest);

try {
   validateLoginRequest($loginRequest);
   echo "VALID" . PHP_EOL;
} catch (ValidationException | Exception $exception){
   echo " Error : { $exception->getMessage() }" . PHP_EOL;

   var_dump($exception->getTrace());
}
// catch (Exception $exception){
// echo "Error : {$exception->getMessage()}" . PHP_EOL;
// }
finally {
   echo "Program Selesai" . PHP_EOL;
}


