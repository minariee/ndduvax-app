<?php

namespace App\Http\Controllers;

use App\Models\VaccineType;
use Illuminate\Http\Request;

class VaccineTypesController extends Controller
{
    public function delete(VaccineType $vaccine_type)
    {
        $vaccine_type->delete();

        return redirect()
        ->route('vaccine-types')
        ->with('status', 'Vaccine was succesfully deleted.');
    }

    public function edit(VaccineType $vaccine_type)
    {
        return view('vaccine_type.edit', [
            'data' => $vaccine_type,
        ]);
    }

    public function update(VaccineType $vaccine_type, Request $request)
    {
        $request->validate([
            'type_name' =>'required',
            'brand_name' => 'required',
        ]);

        $vaccine_type->type_name = $request->type_name;
        $vaccine_type->brand_name = $request->brand_name;
        $vaccine_type->save();

        return redirect()
        ->route('vaccine-types.edit', ['vaccine_type' => $vaccine_type->id])
        ->with('status', 'Vaccine was successfully updated.');
    }

    public function create()
    {
        return view('vaccine_type.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type_name' => 'required',
            'brand_name' => 'required',
        ]);

        VaccineType::create([
            'type_name' => $request->type_name,
            'brand_name' => $request->brand_name,
            'current_dose' => $request->dosage,
        ]);

        return redirect()->route('vaccine-types.store')
        ->with('status', 'Vaccine was succesfully added.');
    }

    public function index()
    {
        $vaccineTypes = VaccineType::orderBy('type_name', 'asc')->get();

        return view('vaccine_type.index', [
            'vaccines' => $vaccineTypes,
        ]);
    }
}
