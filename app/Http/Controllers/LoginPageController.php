<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginPageController extends Controller
{
    public function index() {
        return view('loginscreen', [
            'page_substitle' => 'Login Page'
        ]);
    }
}