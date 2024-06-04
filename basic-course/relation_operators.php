<?php

$a = 5;
$b = 5;
$c = 9;
$d = 2;
$pepito_age = 23;

// Equal
var_dump($a == $b);

// Identity!
var_dump($a === $b);

// Diferent
var_dump($a != $b);

// Not identity
var_dump($a !== $b);

// Less than 
var_dump($a < $b);

// Greather than
var_dump($a > $b);

// Greather or equal than
var_dump($a >= $b);

// Less or equal then
var_dump($a <= $b);

// Spacial ship
// Returns -1 if the left number is minor than the right number
// If both numbers are equal, returns 0
// If the eft number is greather than the right number, returns 1
echo 2 <=> 1; // 1
echo "\n";
echo 1 <=> 1; // 0
echo "\n";
echo 1 <=> 2; // -1
echo "\n";

// If juanito age is NULL, please use pepito age
echo $juanito_age ?? $pepito_age . "\n";
