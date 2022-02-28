<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function showSession(){

        return view('login');

    }

    public function showRegister(){
        return view('register');
    }
}
