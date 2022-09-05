<?php
class Task {
    //properties
    protected $description;
    protected $completed = false;

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


$task = new Task('Go to the store');//an instance of a class is an object

$task->complete(); //task complete

var_dump($task->isComplete());