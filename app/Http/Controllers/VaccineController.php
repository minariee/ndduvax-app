<?php

namespace App\Http\Controllers;

use App\Http\Requests\VaccineFormRequest;
use App\Models\Account;
use App\Models\Vaccine;
use App\Models\VaccineType;

class VaccineController extends Controller
{
    public function store(VaccineFormRequest $request, Account $account)
    {
        $path = $request
        ->file('proof_of_vaccination')
        ->store('records');
        $vaccineType = VaccineType::find($request->vaccine_brand);

        $vaccine = new Vaccine([
            'vaccine_type' => $vaccineType->type_name,
            'vaccine_brand' => $vaccineType->brand_name,
            'current_dose' => $request->dosage,
            'latest_dosage_date' => $request->latest_dosage_date,
            'proof_of_vaccination' => $path,
        ]);

        $account
        ->vaccines()
        ->save($vaccine);

        return redirect()
        ->route('vaccine-record', ['id' => $account->id]);
    }

    public function delete(Vaccine $vaccine)
    {
        $account = $vaccine->account;
        $vaccine->delete();

        return redirect()
        ->route('vaccine-record', ['id' => $account->id]);
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
