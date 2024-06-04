<?php

/* function get_random_husky(){
    $husky_number = rand(1, 5);
    echo $husky_number . "\n";

    switch($husky_number){
        case 1:
            echo "You have a Father husky!";
            break;
        case 2:
            echo "You have a Mother husky!";
            break;
        case 3:
            echo "You have a Son husky!";
            break;
        default:
            echo "There isn't husky for you";
    }

    echo "\n";
}; */

// function with default value
/* function do_sum($first_number, $second_number = 10){
    $sum = $first_number + $second_number;
    echo "The sum result is: $sum \n";
};

$first_number = (int) readline("Write the first number: ");
$second_number = (int) readline("Write the second number: ");

do_sum($first_number, $second_number); */

// We can put 2 arrays in one
/* $array_one = [1, 2, 3];
$array_two = [4, 5, 6];

$both_arrays = [...$array_one, ...$array_two];

var_dump($both_arrays);
 */
// array unpacked
/* function do_sum($first_number, $second_number){
    $sum = $first_number + $second_number;
    echo "The sum result is: $sum \n";
};

// do an array to get in a sum the 2 first values of his nums
$array_with_values = [1, 2, 3, 4];
$array_with_another_values = [1, 45];

do_sum(...$array_with_values); // result is 2
do_sum(...$array_with_another_values); // result is 46 */

function infinite_sum(...$array_of_numbers_to_sum){
    var_dump($array_of_numbers_to_sum);
    $final_sum = 0;

    foreach ($array_of_numbers_to_sum as $number) {
        $final_sum += $number;
    }

    echo "The sum of " . implode(" + ", $array_of_numbers_to_sum) . " is: $final_sum \n";

    return $final_sum;
}

$result_sum = infinite_sum(1, 5, 10, 20);

echo "The result is: $result_sum";
