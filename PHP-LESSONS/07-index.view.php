<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>testing</li>
        
    <?php 
    foreach ($person as $key=> $value) {
        echo '<li>' . '<strong>' . $key . ': ' . '</strong>' . $value . '</li>';
    }
    ?>
     <?php 
        foreach ($foods as $foodItem) {
            echo  '<li>' . $foodItem . '</li>';
        }
    ?>
    </ul>
</body>
</html>