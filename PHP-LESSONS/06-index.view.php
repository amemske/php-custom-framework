<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06-index</title>
</head>
<body>
    <ul>
        <li>static list item</li>

        <?php foreach($names as $name) : ?>
           <li><?= $name ?></li>
        <?php endforeach; ?>

    <?php 
   
   print_r($names);

    foreach($names as $name){
        echo '<li>' . $name . '</li>';
    }

    ?>
    </ul>
</body>
</html>