<?php

/* $router->define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'about/culture' => 'controllers/about-culture.php',
    'contact' => 'controllers/contact.php',
    'names' => 'controllers/add-name.php',
    
]); */

$router->get('', 'PageController@home');
$router->get('about', 'PageController@about');
$router->get('contact', 'PageController@contact');
$router->get('users', 'UserController@index');
$router->post('users', 'UserController@store');

//var_dump($router->routes);