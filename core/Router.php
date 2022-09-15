<?php
namespace App\Router;

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
           // die(var_dump($this->routes[$requestType][$uri]));//e.g PageController@home
           // return $this->routes[$requestType][$uri]; //give me the controller associated with that URI          
            return $this->callAction(
                //explode breaks up a string, then those are turned into arguments by the spread operator
                ...explode('@', $this->routes[$requestType][$uri]) 
            );
         }
         throw new Exception('No routes defined for this URI');
    }

    protected function callAction($controller, $action){
// forward slashes means we want to display the variable {$controller}
        $controller = "App\\Controller\\{$controller}";

        $controller = new $controller;

        die($controller);

           // die(var_dump($controller, $action));//"PageController" "home"
        if(! method_exists($controller, $action)){
            throw new Exception('No route defined for this URI');       
        }
        
        return (new $controller)->action(); //????? revisit this code
    }

     public function get($uri, $controller){
        $this->routes['GET'][$uri] = $controller; //  $this->routes['GET'] is an array, we are just adding[$uri] to the array
        //[$uri] now has a value of $controller
    }
    public function post($uri, $controller){
        $this->routes['POST'][$uri] = $controller;
    }



}