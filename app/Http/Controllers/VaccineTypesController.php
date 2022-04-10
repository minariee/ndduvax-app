<?php

namespace App\Http\Controllers;

use App\Models\VaccineType;

class VaccineTypesController extends Controller
{
    public function index()
    {
        $vaccineTypes = VaccineType::orderBy('brand_name', 'asc')->get();

        return view('vaccine-brand', [
            'vaccines' => $vaccineTypes,
        ]);
    }
}
