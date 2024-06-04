<?php

echo "Hey! Would you tell me what hour is? \n";
echo "Yes! of course, is the " . get_date();

function get_date(){
    date_default_timezone_set('America/Mexico_City');
    return date("g:i a \n");
}