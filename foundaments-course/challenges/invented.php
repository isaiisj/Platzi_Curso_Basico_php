<?php

$number_1 = readline("Write your first number: ");
$number_2 = readline("Write your second number: ");

function numbers_sum($number1, $number2){
    return $number1 + $number2;
}

$sum_result = numbers_sum($number_1, $number_2);
echo "The sum of $number_1 + $number_2 = $sum_result \n" ;
