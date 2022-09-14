<?php


class QueryBuilder {
    protected $pdo;

public function __construct($pdo){ //a constructor defines all the things required for the class to do its jon
    $this->pdo = $pdo;
}


public function selectAll($table){
        $statements = $this->pdo->prepare("select * from {$table}");
        $statements->execute();
        
        //$tasks = $statements->fetchAll(PDO::FETCH_OBJ);
        return $statements->fetchAll(PDO::FETCH_CLASS); //$intoClass - Name of the Class
        
        //dd($tasks[0]->Description);
        
        }

public function insert($table, $parameters){
        //insert into names (name) values (:name, :email)

       //die(var_dump(array_keys($parameters))); //returns an array of only the keys

        $sql = sprintf(
            'insert into %s (%s) values (%s) ',$table , implode(' , ', array_keys($parameters)), ':' . implode(' , :', array_keys($parameters)) 
        );

       // die(var_dump($sql));

       try{
        $statements = $this->pdo->prepare($sql);
        $statements->execute($parameters); //$parameters is added here to bind the values
       }
       catch (Exception $e){
            //die($e->getMessage()); - for dev purposes
            die('Something went wrong');
       }
        
    }

}