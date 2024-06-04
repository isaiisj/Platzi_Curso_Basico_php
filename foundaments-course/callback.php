<?php

$coffe_prices = [12, 56, 32, 89, 2, 1];


// a => actual number
// b => next number to actual
// sort from minor to mayor
usort($coffe_prices, function($a, $b){
    return $a <=> $b;
});

var_dump($coffe_prices);