<?php

//var_dump($_SERVER);

//var_dump($_GET['name']); //get should be used for search

//var_dump($_POST); //get should be used for forms

//var_dump('You typed ' . $_POST['name']);

App::get('database')->insert('users', [

    'name' => $_POST['name']
]); 

//once you successfully submit, redirect to the home page

header('Location: /contact');