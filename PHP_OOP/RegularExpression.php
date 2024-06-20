<?php

$matches = [];
$result =preg_match_all("/mad|susi|muh/i","Muhammad Susilo", $matches);

var_dump($result);
var_dump($matches);

$result =preg_replace("/anjing|bangsat/i","***", "dasar lu anjing dan bangsat");
var_dump( $result);

$result = preg_split("/[\s,-]/", "Muhammad Susilo, Programmer Zaman-Now");
var_dump( $result);



