<?php

class Router {

    public $routes = [

        'GET' => [],
        'POST' => []
    ];

   

    public static function load($file){
        $router = new static;//create a new router instance
        require $file;//load routes.php
        return $router;
    }

    public function direct($uri, $requestType){

        if(array_key_exists($uri, $this->routes[$requestType])){ //$requestType is same to POST or GET (Look for a post/get with this URI)
            return $this->routes[$requestType][$uri]; //give me the controller end point associated with that URI
         }
         throw new Exception('No routes defined for this URI');
    }

     public function get($uri, $controller){
        $this->routes['GET'][$uri] = $controller; //  $this->routes['GET'] is an array, we are just adding[$uri] to the array
        //[$uri] now has a value of $controller
    }
    public function post($uri, $controller){
        $this->routes['POST'][$uri] = $controller;
    }



}