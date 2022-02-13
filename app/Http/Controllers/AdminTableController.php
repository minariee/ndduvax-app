<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
class AdminTableController extends Controller
{
    public function index() {
        
        $accounts = Account::all();
        return view('admintable', [
            'page_substitle' => 'Admintable',
            'accounts' => $accounts
        ]);
    }
}
