<?php

// Every line end with a ";" 
echo "Hello, this is build with PHP \n";

// Variables
$name = "Paul";
$last_name = "Flores";

// Another way to do a concatenation
echo "My name is: " . $name . " " . $last_name . "\n";

// Concatenation
echo "My name is: $name $last_name \n";

// Multiplication
echo "The result of multiply 4*5 is: " . (4 * 5) . "\n"; 

// Our first array!
$people = [
    "Paul" => 22,
    "Husky" => 15,
    "Nataly" => 23
];

// This provides information about our variable
var_dump( $people );

// Print the variable in a good look to see
print_r( $people );

echo "\n"


// This is the close symbol to indicate when the PHP code ends
// This is very healpful to work with others programming lenguages in one file
?>