<?php

$huskys_school = [
    "sr-husky" => [
        "age" => 10,
        "color" => "black",
        "food" => [
            "favorite" => "nupec",
            "normal" => "dogchow"
        ]
    ],

    "mini-husky" => [
        "age" => 2,
        "color" => "white",
        "food" => [
            "favorite" => "mini-nupec",
            "normal" => "mini-dogchow"
        ]
    ],

    "mother-husky" => [
        "age" => 9,
        "color" => "black",
        "food" => [
            "favorite" => "mother-nupec",
            "normal" => "normal-nupec"
        ]
    ]
];

echo "The huskys food are very greath in all the words \n";
echo "Dad husky's favorie food is: " . $huskys_school['sr-husky']['food']['favorite'] . "\n";
echo "his color is: " . $huskys_school['sr-husky']['color'] . "\n";

echo "Mini husky's favorie food is: " . $huskys_school['mini-husky']['food']['favorite'] . "\n";
echo "his color is: " . $huskys_school['mini-husky']['color'] . "\n";

echo "Mini husky's favorie food is: " . $huskys_school['mother-husky']['food']['favorite'] . "\n";
echo "his color is: " . $huskys_school['mother-husky']['color'] . "\n";
