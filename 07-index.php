<?php

//Add items to a simple array
$foods = [
    'rice', 'peas', 'mangoes', 'ugali'
];

$food[] = 'chapatis';

$person = [
    'age' => 38,
    'career' => 'web developer',
    'hair' => 'black'
];

//Add items to  associative array
$person['name'] = 'Antony';



//echo only works strings and ints

//use print_r or var_dump

//to kill the app use die() or die(var_dump($person))

require '07-index.view.php';