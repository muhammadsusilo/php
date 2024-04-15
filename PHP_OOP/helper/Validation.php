<?php

function validateLoginRequest(LoginRequest $LoginRequest)
{

   if(!isset($LoginRequest->username)){
      throw new ValidationException("Username is null");
   } else if(!isset($LoginRequest->password)){
      throw new ValidationException("Password is null");
   }else if (trim($LoginRequest->username) == ""){
      throw new Exception("Username is empty");
   }else if(trim($LoginRequest->password) == ""){
      throw new Exception("Password is empty");
   }

}
