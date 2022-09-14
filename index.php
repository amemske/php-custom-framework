<?php

//always make sure you require the autoloader to load depenancies
require 'vendor/autoload.php';

$database = require 'core/bootstrap.php';

//die(var_dump($app));

//$router  = new Router();

//require 'routes.php';

//var_dump(trim($_SERVER['REQUEST_URI'], '/'));



//require $router->direct($uri);


$router =  Router::load('routes.php'); //Router Load this file

require $router->direct(Request::uri(), Request::method()); // direct traffic
?>