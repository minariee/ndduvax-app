<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine;
class AdminTableController extends Controller
{
    public function index() {
        
        $vaccines = Vaccine::all();
        return view('vaccine', [
            'page_substitle' => 'Admintable',
            'accounts' => $accounts
        ]);
    }
}
