<?php

require '09-functions.php';

//connect to a dp using  a pdo object;
//add try catch

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodos','root', '');
} catch (PDOException $e) {
   die($e->getMessage());
}

//prepare sql statements
//execute them
//fetch them

$statements = $pdo->prepare('select * from todos');

$statements->execute();

$tasks = $statements->fetchAll(PDO::FETCH_OBJ);

//dd($tasks[0]->Description);




require '11-index.view.php';