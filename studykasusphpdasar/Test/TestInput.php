<?php

require_once "../Helper/Input.php";

$name = input("Name");
echo "Hello $name" . PHP_EOL;

$channel = input("Channel Belajar");
echo  "Belajar di $channel " . PHP_EOL;