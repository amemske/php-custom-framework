<?php

require '09-functions.php';

class Task {
    //properties
    public $description;
    public $completed = false;

    public function __construct($description) //constructor means automatically triggered on instantiation
    {
        $this->description = $description;
    }

    public function complete(){
        $this->completed = true;
    }

    public function isComplete(){
        return $this->completed;
    }
}


//$task = new Task('Go to the store');//an instance of a class is an object 
//$task->complete(); //task complete
//var_dump($task->isComplete());

//array of objects
$tasks = [
    new Task('Go to the store'),
    new Task('Clean the room'),
    new Task('Finish PHP lessons')
];

dd($tasks); //- custom function to var_dump

$tasks[0]->complete(); //complete the first task

//add the view
require '10-index.view.php';