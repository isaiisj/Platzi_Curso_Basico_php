<?php

principal_menu();

function principal_menu(){
    echo "Welcome to the Hangman game! \n";
    $is_game_finished = false;
    
    while (!$is_game_finished) {
        $user_option = readline("What would you like to do? \n(1) Continue\n(2) Exit\t");
        
        switch($user_option){
            case 1:
                start_game();
                break;
            case 2:
                $is_game_finished = true;
                break;
            default:
                echo "Invalid option, please try again \n";
        }       
    }
}

function start_game(){
    
    echo "\n----------------------------------------------\n";
    echo "\nGreath! we are going to start a new hangman game...\n\n";

    $secret_word = get_random_word();
    $number_of_secret_word_letters = strlen($secret_word);
    game_menu($secret_word, $number_of_secret_word_letters);
}

function get_random_word(){
    $random_number = rand(0, 5);
    $secrets_words = ["Acevedo", "Cu", "Rosa", "Candy", "Kim", "Layla"];
    echo $secrets_words[$random_number] . "\n";
    return $secrets_words[$random_number];
}


function game_menu($secret_word, $number_of_secret_word_letters){
    echo "Cool! Your word has been generated\nremember you always can press 0 to exit \n";

    $is_game_finished = false;
    $lifes_number = 5;
    $letter_remaining = $number_of_secret_word_letters;
    $remaining_letters_position = str_repeat(" - ", $letter_remaining);

    $unique_word_letters = str_split($secret_word);
    $unique_word_letters = array_unique($unique_word_letters);

    $letters_used = [];
    $incorrect_letters = [];
    while(!$is_game_finished){

        echo "\n----------------------------------------------\n";
        echo "You have \"$lifes_number\" lifes remaining\n";
        echo "Incorrect letters used: " . implode(", ", $incorrect_letters) . "\n";
        echo "word: \t\n";
        echo $remaining_letters_position . "\n";
        echo "\n----------------------------------------------\n";


        $user_letter = readline("Which letter would you like to try?: ");
        $user_letter = strtolower($user_letter);
        $formatted_word = strtolower($secret_word);

        if (strpos($formatted_word, $user_letter) !== false){
            array_push($letters_used, $user_letter);
            $remaining_letters_position =  get_formatter_letters_remaining($secret_word, $user_letter, $remaining_letters_position);

        } else {
            array_push($incorrect_letters, $user_letter);
            echo "Letter \"$user_letter\" isn't in the word \n";
            $lifes_number--;
        }
        
        
        if ($lifes_number == 0){
            echo "Oh no! You loss the game, the correct word was: $secret_word \n";
            $is_game_finished = true;

        } else if( (count($unique_word_letters)) == (count($letters_used)) ) {
            echo "\n\t---------------------------------------------------------\n";
            echo "\n\t| You have just win the game! the word was $secret_word  |\n";
            echo "\n\t---------------------------------------------------------\n\n";
            $is_game_finished = true; 
        } else if( $user_letter == 0 ){
            echo "\nSee you later!\n";
            $is_game_finished = true;
        }
    }
}


function find_positions($word, $letter){
    $positions = [];
    $position = strpos(strtolower($word), strtolower($letter));   

    while($position !== false){
        $positions[] = $position;
        $position = strpos($word, $letter, $position + 1);  
    }

    return $positions;
};

function get_formatter_letters_remaining($secret_word, $user_letter, $remaining_letters_position){
    $letters_positions = str_replace(" ", "", $remaining_letters_position);
    $positions_found = [];
    $letter_of_word_positions = find_positions($secret_word, $user_letter);

    foreach ($letter_of_word_positions as $letter) {
        $letters_positions = substr_replace($letters_positions, $user_letter, $letter, 1);
    }

    $letters_positions = str_split($letters_positions);

    return implode (" ", $letters_positions);
}