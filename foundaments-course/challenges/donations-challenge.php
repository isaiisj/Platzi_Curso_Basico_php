<?php

echo "Welcome to the withdrawals program \n";

$stream_donations = readline("Please the money that you have: ");

if ($stream_donations >= 1000) {
    echo "Greath! you can do a withdrawal";
} else {
    echo "You don't have enought money to do a withdrawal";
}
