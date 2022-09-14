<?php

//get all names
$users = App::get('database')->selectAll('users');


require 'views/contact.view.php';