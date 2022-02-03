<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine;
class VaccineController extends Controller
{
    public function index() {
        
        $vaccines = Vaccine::all();
        return view('vaccine', [
            'page_substitle' => 'Vaccines',
            'vaccines' => $vaccines
        ]);
    }
}
