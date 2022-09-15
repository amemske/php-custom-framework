<?php

namespace App\Controllers;

use App\Core\App;

class UserController {
    public function index(){

        $users = App::get('database')->selectAll('users');
        return view('users', compact('users'));
    }

    public function store(){
        //insert the user associated with the request
        //and then redirect back all users

        App::get('database')->insert('users', [

            'name' => $_POST['name']
        ]); 

return redirect('users');

    }
}