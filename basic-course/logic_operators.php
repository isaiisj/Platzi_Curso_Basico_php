<?php

$dogs_are_beautiful = true;
$cat_are_beautiful = false;
$dogs_have_4_paws = true;
$cats_can_fly = false;

// And operator true
var_dump($dogs_are_beautiful && $dogs_have_4_paws);

// Or operator false
var_dump($cat_are_beautiful || $cats_can_fly);

// And operator false
var_dump($cat_are_beautiful && $dogs_are_beautiful);

// Or operator true
var_dump($cats_can_fly || $dogs_have_4_paws);

// NOT WITH AND OPERATOR TRUE
var_dump(!$cat_are_beautiful && !$cats_can_fly);

// NOT WITH OR OPERETARO TRUE
var_dump(!$cat_are_beautiful || $cats_can_fly);