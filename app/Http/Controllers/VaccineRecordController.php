<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\VaccineType;
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
        $vaccines = $account->vaccines;
        $latest = $account->latestVaccine();

        return view('vaccinerecord-single', [
            'user' => $user,
            'account' => $account,
            'vaccines' => $vaccines,
            'latest' => $latest,
            'vaccine_brands' => VaccineType::orderBy('brand_name', 'asc')->get(),
        ]);
    }

    public function myRecord()
    {
        $user = Auth::user();
        $account = $user->account;
        $vaccines = $account->vaccines;
        $latest = $account->latestVaccine();

        return view('vaccinerecord-single', [
            'user' => $user,
            'account' => $account,
            'vaccines' => $vaccines,
            'latest' => $latest,
            'vaccine_brands' => VaccineType::orderBy('brand_name', 'asc')->get(),
        ]);
    }
}
