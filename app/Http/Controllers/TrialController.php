<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TrialController extends Controller
{
    public function index() {
        $users =User::select('mobile_number')->get();
        
        foreach ($users as $user) {
            echo $user->mobile_number;    
        }
        
    } 
}