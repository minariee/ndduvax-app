<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsAndConditionController extends Controller
{
    public function index() {
        return view('login-page', [
            'page_substitle' => 'Terms and Conditions'
        ]);
    }
}