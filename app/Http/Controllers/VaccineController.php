<?php

namespace App\Http\Controllers;

use App\Http\Requests\VaccineFormRequest;
use App\Models\Account;
use App\Models\Vaccine;

class VaccineController extends Controller
{
    public function store(VaccineFormRequest $request, Account $account)
    {
        $vaccine = new Vaccine($request->validated());
        $account->vaccines()->save($vaccine);

        return redirect()->route('vaccine-record', ['id' => $account->id]);
    }

    public function delete(Vaccine $vaccine)
    {
        $account = $vaccine->account;
        $vaccine->delete();

        return redirect()->route('vaccine-record', ['id' => $account->id]);
    }

    public function index()
    {
        $vaccines = Vaccine::all();

        return view('vaccine', [
            'page_substitle' => 'Vaccines',
            'vaccines' => $vaccines,
        ]);
    }
}
