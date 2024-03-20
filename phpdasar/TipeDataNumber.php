<?php

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(0123);

echo "Hexadecimal : ";
var_dump(0x1a);

echo "Binary : ";
var_dump(0b111111);

echo "Underscore in number : "; 
var_dump(1_241_241_241); // tambahkan underscore supaya lebih mudah untuk membacanya


// Floating
echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E Notation : (1.7 x 1000) : ";
var_dump(1.7e3);

echo "Floating Point dengan E Notation minus: (1.7 x 0.001) :";
var_dump(1.7e-3);

echo "Underscore di Floating Point :";
var_dump(1_123.123);


// untuk yang 64 bit
echo "Integer Overflow : ";
var_dump(9223372036854775808);