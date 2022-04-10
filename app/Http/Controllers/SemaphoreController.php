<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\SMS;
use Illuminate\Http\Request;

class SemaphoreController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('smsemaphore', [
            'page_substitle' => 'SMS',
            'users' => $users,
        ]);
    }

    public function send(Request $request)
    {
        $sms = new SMS();

        $sms->send(['09171338178', '09760063316', '09275551057'], $request->message);
    }
}
