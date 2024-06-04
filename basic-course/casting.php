<?php

$number_before_casting = "5";
var_dump($number_before_casting);

// We can do the casting from string to integer
$number_after_casting = (int) $number_before_casting;
var_dump($number_after_casting);

// This is gooing to cut the integer number to do the cast
$float_number = 10.10;
$integer_number = (int) $float_number;
var_dump($integer_number);

// Also we can cast bolean numbers with 1 for true and 0 for false
$normal_number = 1;
$boolean_value = (boolean) $normal_number;
var_dump($boolean_value);
