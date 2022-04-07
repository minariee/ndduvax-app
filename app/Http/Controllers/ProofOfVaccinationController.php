<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Support\Facades\Storage;

class ProofOfVaccinationController extends Controller
{
    public function download(Account $account)
    {
        return Storage::download($account->proof_of_vaccination);
    }
}
