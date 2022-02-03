<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine;
class VaccineFormController extends Controller
{
    public function index() {
        return view('vaccineform', [
            'page_substitle' => 'Vaccine Form'
        ]);
    }

    public function submit(Request $request) {
        $vaxData = $request->except(["_token"]);
        $vax = new Vaccine($vaxData);
        $vax->save();
        return redirect('/vaccines');
    }
      
}
