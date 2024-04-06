<?php

require_once "data/Category.php";

$category = new Category();
$category->setName("Laptop\n");
$category->setExpensive(true);

echo "Name: {$category->getName()}";
echo "Expensive: {$category->isExpensive()}";





