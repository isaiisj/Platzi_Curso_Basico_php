<?php

// While
$contador = 0;

while ($contador <= 10) {
    echo "This course is incredible with \"$contador\" iterations\n";
    $contador++;
}

// Do while
do {
    $usernames_list = ["Angel", "Acevedo", "Cu"];
    $username = readline("Please write your username: ");
    

} while (in_array($username, $usernames_list));

// For
for ($i = 0; $i < 10; $i++) { 
    echo "The actual number is: $i \n";
}

// For each
$coffe_shop = [
    "American" => 20,
    "Could Coffe" => 5,
    "Mocca" => 15,
    "Latte" => 10
];

foreach ($coffe_shop as $coffe => $price) {

    // If this condition is true, the bucle ends with the break statement
    if ($coffe == "Latte") {
        echo "We found a latte coffe!";
        break;
    
    // If this condition is true, anything after that will be ignored
    // and the bucle will continue
    } elseif ($coffe == "Could Coffe") {
        continue;
    }

    echo "The price of $coffe coffe is $$price \n";
}
