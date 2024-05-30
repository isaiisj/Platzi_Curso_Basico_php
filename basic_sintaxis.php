<?php 

// Variables
$first_number = 1;
$second_number = 2;

// Constants
// Is good practice write constants names in upper case
define("PI_NUMBER", 3.1415);
// Another way to define constants
const NAME = "Paul";

// We can do math operations with variables
echo "Sum of $first_number + $second_number is: ";
echo ($first_number + $second_number) . "\n";
echo "My name is " . NAME . "\n";

// Constants will be used without dollar sign
echo "The number PI is equal to " . PI_NUMBER . "\n"; 