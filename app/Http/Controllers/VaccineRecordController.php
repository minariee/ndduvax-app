<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Support\Facades\Auth;

class VaccineRecordController extends Controller
{
    public function index()
    {
        $accounts = Account::all()->filter(function ($account) {
            return $account->user->hasRole('user');
        });

        return view('vaccinerecord', [
            'page_substitle' => 'Vaccine Record',
            'accounts' => $accounts,
        ]);
    }

    public function show($id)
    {
        $account = Account::find($id);
        $user = $account->user;

        return view('vaccinerecord-single', [
            'user' => $user,
            'account' => $account,
        ]);
    }

    public function myRecord()
    {
        $user = Auth::user();
        $account = $user->account;

        return view('vaccinerecord-single', [
            'user' => $user,
            'account' => $account,
        ]);
    }
}
