<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index() {
        return view('privacypolicy', [
            'page_substitle' => 'Privacy Policy'
        ]);
    }
}