<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\DB;

class VaccineRecordController extends Controller
{
    public function index($id) {
        $accounts = Account::where('id',$id)-> get()->first();
        return view('vaccinerecord', [
            'page_substitle' => 'Vaccine Record',
            'account' => $accounts
        ]);
    }
    
    public function extension($id){
        $id = auth()->account()->id;
        $accounts = Account::find($id);
        return view('vaccinerecord',['account' => $accounts]);
    }
}
