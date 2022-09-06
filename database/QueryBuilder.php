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
        return $statements->fetchAll(PDO::FETCH_CLASS);
        
        //dd($tasks[0]->Description);
        
        }

}