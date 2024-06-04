<?php

// husky 1 : 10
// husky 2 : 20
// husky 3 : 30

$husky = "husky_3";

switch ($husky) {
    case "husky_1":
        echo "His favorite number is 10";
        break;

    case "husky_2":
        echo "His favorite number is 20";
        break;

    case "husky_3":
        echo "His favorite number is 30";
        break;    

    default:
        echo "This husky doesn't exists";
        break;
}