<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create(){
        return view ('users.register');
    }

    public function login(){
        return view ('users.login');
    }

}
