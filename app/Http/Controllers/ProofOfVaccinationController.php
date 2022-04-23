<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Support\Facades\Storage;

class ProofOfVaccinationController extends Controller
{
    public function download(Vaccine $vaccine)
    {
        return Storage::download($vaccine->proof_of_vaccination);
    }
}
