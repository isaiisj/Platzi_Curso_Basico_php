<?php

$upper_shops = [2, 4, 6, 8];
$lower_shops = [1, 3, 5, 7, 9];

$lower_dirty_ways = 4;
$water_ways = 8;
$upper_dirty_ways = 3;

$shop_to_arrive = 6;
$departure_shop = 1;

$is_ways_end = false;
$ways_number = 0;

while (!$is_arrive_to_shop) {

    if( in_array($shop_to_arrive, $upper_shops)){
        $index = array_search($shop_to_arrive) + 1; // 3
        echo "Greath, the shop place is in the upper ways with index number: $index";

        $lower_ways = $index - 1; // 2
        $water_ways = 0; // 5
        $upper_ways = $index - 1; // 2

        if (index == 1) {
            $water_ways = 1;
        } else if (index == 2) {
            $water_ways = $index + 1;
        } else if(index == 3) {
            $water_ways = $index + 2;
        } else if(index == 4){
            $water_ways = $index + 3;
        };
        
        while(!$is_ways_end) {
            

        }


    } else if(in_array($shop_to_arrive, $lower_shops)){
        echo "Greath, the shop place is in the lower ways";
    }    
}
