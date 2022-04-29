<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\VaccineType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VaccineRecordController extends Controller
{
    public function index(Request $request)
    {
        $accounts = Account::all()->filter(function ($account) {
            return $account->user->hasRole('user');
        });

        $accounts = Account::simplepaginate(2);
        $search = $request->q;

        if($search!=""){
            $accounts = Account::where(function ($query) use ($search){
                $query->where('name', 'like', '%'.$search.'%')
                    ->orWhere('occupation', 'like', '%'.$search.'%')
                    ->orWhere('id', 'like', '%'.$search.'%');
            })
            ->simplepaginate(2);
            $accounts->appends(['q' => $search]);
        }
        else{
            $account = Account::simplepaginate(2);
        }

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
            'vaccine_types' => VaccineType::distinct()->get(['type_name']),
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
            'vaccine_types' => VaccineType::orderBy('type_name', 'asc')->get(),
        ]);
    }
}
