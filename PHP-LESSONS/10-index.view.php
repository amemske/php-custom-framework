<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09-functions</title>
</head>
<body>
    <ul>
        <li>Static text</li>
        <?php
        foreach($tasks as $task){
            if($task->completed){
            echo '<strike>' . '<li>' . $task->description . '</li>' . '</strike>';        
        }
        else{
            echo '<li>' . $task->description . '</li>'; //omit the $ for object properties
        }
    }
        ?>
    </ul>
    
</body>
</html>