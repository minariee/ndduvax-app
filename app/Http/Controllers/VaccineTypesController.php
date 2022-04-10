<?php

namespace App\Http\Controllers;

use App\Models\VaccineType;

class VaccineTypesController extends Controller
{
    public function index()
    {
        $vaccineTypes = VaccineType::all();

        return view('vaccine-brand', [
            'vaccines' => $vaccineTypes,
        ]);
    }
}
