<?php

$first_number_variable = 10;
$second_number_variable = 10;
$first_string_variable = 20;

$sum_result = $first_number_variable + $second_number_variable;
$sum_number_string_variable = $sum_result + $first_string_variable;
$sum_string = $first_string_variable + $first_string_variable; 

echo "The result of $first_number_variable + $second_number_variable is: " . $sum_result . "\n";

// We can sum two integers
var_dump($sum_result);

// We can sum string and integer
var_dump($sum_number_string_variable);

// We can sum two strings
var_dump($sum_string);
