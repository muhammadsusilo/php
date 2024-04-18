<?php

var_dump(str_contains("Muhammad Susilo", "Susilo")); //true
var_dump(str_contains("Muhammad Susilo", "Muhammad")); //true
var_dump(str_contains("Muhammad Susilo", "Joko")); //false


// dimulai dari awal
var_dump(str_starts_with("Muhammad Susilo", "Muhammad")); //true
var_dump(str_starts_with("Muhammad Susilo", "Susilo")); // false

// dimulai dari akhir
var_dump(str_ends_with("Muhammad Susilo", "Susilo")); //true
var_dump(str_ends_with("Muhammad Susilo", "Muhammad")); //false
