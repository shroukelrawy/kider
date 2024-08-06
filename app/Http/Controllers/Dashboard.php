<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function dashform(){
        return view('dashform');
    }
    public function dashtable(){
        return view('dashtable');
    }
    public function register(){
        return view('register');
    }
    public function login(){
        return view('login');
    }
}
