<?php require('partials/header.php'); ?>
<h1>contact</h1>

<ul>
        <?php
        foreach($users as $user){
            echo '<li>' . $user->name . '</li>';
    }
        ?>
    </ul>

    <form action="/names" method="POST" >
        <h3>Submit your name</h3>
        <input type="text" name="name"></input>
        <button type="submit">Submit</button>

    </form>
</body>
</html>