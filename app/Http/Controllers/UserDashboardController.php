<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class UserDashboardController extends Controller
{
    public function index() {
        $accounts = Account::find(3);
        return view('userDashboard', [
            'page_substitle' => 'User Dashboard',
            'account'=>$accounts
        ]);
    }
}


