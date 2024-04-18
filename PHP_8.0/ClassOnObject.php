<?php

class Login{

};

$login = new Login();

var_dump($login::class); //php 8
var_dump(get_class($login)); //php 7
var_dump(Login::class);

