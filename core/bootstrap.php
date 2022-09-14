<?php

//a box called bind, throw in the array config.php, assign a label to it called 'config'
//take the array in config.php store it in bind(), associate it with 'config' key

App::bind('config', require 'config.php'); 

//die(var_dump(App::get('config')));

$config = App::get('config');

App::bind( 'database', new QueryBuilder(Connection::make(App::get('config')['database'])));






// $app = [];

// $app['$config'] = require 'config.php'; //store keys in app

// // require 'core/Router.php';
// // require 'core/Request.php';
// // require 'core/database/Connection.php';
// // require 'core/database/QueryBuilder.php';

// $app['database'] = new QueryBuilder(Connection::make($app['$config']['database']));//$app['$config'] here is a variable with database as the key


