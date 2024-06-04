<?php

$seconds = readline("Put the time in seconds: ");

$hours = (int) ($seconds / 3600);
$minutes = (int) (($seconds % 3600) / 60);
$seconds_rest = ($seconds % 3600) % 60;

echo "$seconds seconds is $hours hour(s) with $minutes minutes and $seconds_rest seconds";
echo "\n";