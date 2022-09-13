<?php require('partials/header.php'); ?>
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