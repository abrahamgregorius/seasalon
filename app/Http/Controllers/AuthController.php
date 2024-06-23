<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_get() {
        return view('login');
    }

    public function register_get() {
        return view('register');
    }
}
