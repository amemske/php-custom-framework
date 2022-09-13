<?php

//connect to a dp using  a pdo object;
//add try catch
/* function connectToDB() {
    try {
       return new PDO('mysql:host=127.0.0.1;dbname=mytodos','root', '');
    } catch (PDOException $e) {
       die($e->getMessage());
    }
}
 */
/* function fetchAllTasks($pdo){
    $statements = $pdo->prepare('select * from todos');
    $statements->execute();
    
    //$tasks = $statements->fetchAll(PDO::FETCH_OBJ);
    return $statements->fetchAll(PDO::FETCH_CLASS, 'Task');
    
    //dd($tasks[0]->Description);
    
    } */
    


//create a function to dump/ check the output
function dd($data) {
    echo '<pre>';
        var_dump($data);
    echo '</pre>';
}

