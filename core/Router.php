<?php

class Router {

    protected $routes = [];

    public function define($routes){
        $this->routes = $routes;
    }

    public static function load($file){
        $router = new static;//create a new router instance
        require $file;//load routes.php
        return $router;
    }

    public function direct($uri){

        if(array_key_exists($uri, $this->routes)){
            return $this->routes[$uri]; 
         }
         throw new Exception('No routes defined for this URI');
    }



}