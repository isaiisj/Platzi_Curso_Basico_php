<?php

// Ways to declare arrays
$ages = [20, 18, 40];
$new_ages = array(20, 18, 40);

echo "One of the ages inside of the array is: " . $ages[1];
echo "\n";
echo "One of the ages inside of the array is: " . $new_ages[2];
echo "\n";

// Asociative Arrays
$ages = array(
    "Carlos" => 20,
    "Juan" => 23,
    "Lizbeth" => 25
);
echo "The carlos age is: $ages[Lizbeth]";

// Arrays inside anothers
$persons = [
    "Carlos" => [
        "age" => 20,
        "last_name" => "Santana"
    ],

    "Husky" => [
        "age" => 11,
        "last_name" => "Huskyino"
    ]
];
echo "\n";

echo "The age of our husky is: " . $persons['Husky']['age'] . " and the carlos last name is " . $persons["Carlos"]["last_name"];
echo "\n";

// Arrays Manipulation
// We can count the elements of our array -> 2: carlos and husky
echo count($persons["Carlos"]) . "\n";

// Look the array information
var_dump($persons);

// Know if the $persons is an array
var_dump(is_array($persons));

// Change String to array
$fruit_list = "Apple,Pineaple,Stewberry";
$fruit_list = explode(",", $fruit_list);
var_dump($fruit_list); 

// Change array to string
$fruit_list = implode(", ", $fruit_list);
var_dump($fruit_list); 


