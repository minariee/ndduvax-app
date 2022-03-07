<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
class VaccineRecordController extends Controller
{
    public function index($id) {
        $accounts = Account::where('id',$id)-> get()->first();
        return view('vaccinerecord', [
            'page_substitle' => 'Vaccine Record',
            'account' => $accounts
        ]);
    }
}