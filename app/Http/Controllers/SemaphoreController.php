<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\SMS;

class SemaphoreController extends Controller
{
    public function index() {
        $users =User::select('mobile_number')->get();
        
        foreach ($users as $user) {
            $user->mobile_number;    
        }
        return view('smsemaphore', [
            'page_substitle' => 'SMS',
            'users' => $users
    
        ]);
    }
    public function send(Request $request){
        
        $sms = new SMS();
        $sms->send([$users], $request->message);
    }    
}