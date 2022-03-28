<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ProfilePictureController extends Controller
{
    public function profile(){
        return view('profile',array('user'=>Auth::user()));
    }

    public function updateavatar(Request $request){

    }
}