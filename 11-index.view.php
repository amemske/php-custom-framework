<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>
<ul>
        <li>Static text</li>
        <?php
        foreach($tasks as $task){
            if($task->Complete){
            echo '<strike>' . '<li>' . $task->Description . '</li>' . '</strike>';        
        }
        else{
            echo '<li>' . $task->Description . '</li>'; //omit the $ for object properties
        }
    }
        ?>
    </ul>
    
</body>
</html>