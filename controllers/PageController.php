<?php

namespace App\Controllers;

class PageController {

    public function home(){
        die('home');
        $tasks = App::get('database')->selectAll('todos');
        return view('index', ['tasks' => $tasks]); //the array is a way to send data - you can also use compact function

    }

    public function about(){
        return view('about');
        
    }

    public function contact(){
        
        //get all names
        $users = App::get('database')->selectAll('users');
        return view('contact',['tasks' => $users]);
        
    }




}

