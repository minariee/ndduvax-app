<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\DB;

class VaccineRecordController extends Controller
{
    public function index() {
        $accounts = Account::all();
        return view('vaccinerecord', [
            'page_substitle' => 'Vaccine Record',
            'accounts' => $accounts
        ]);
    }
    
    public function show($id){
        $account = Account::find($id);
        return view('vaccinerecord-single',['account' => $account]);
    }
}
