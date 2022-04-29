<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TrialController extends Controller
{
    function index()
    {
     $vaccinelist = DB::table('vaccine_types');
    
    }
}