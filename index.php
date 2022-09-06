<?php



require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Task.php';


//prepare sql statements
//execute them
//fetch them

$pdo = Connection::make();//static method

$query = new QueryBuilder($pdo); //public method

$tasks = $query->selectAll('todos');





require 'index.view.php';