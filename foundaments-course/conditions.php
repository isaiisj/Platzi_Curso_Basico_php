<?php

$seats_availables = 1;

if ($seats_availables > 1) {
    echo "You can buy a ticket and watch the spiderman movie!";
} else if ($seats_availables == 1) {
    echo "Is your lucky day! Only one seat is available";
} else {
    echo "We so sorry, you can't watch spiderman movie";
}