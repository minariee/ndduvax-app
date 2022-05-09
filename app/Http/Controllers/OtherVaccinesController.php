<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use App\Models\VaccineType;
use App\Models\Account;
use Illuminate\Support\Facades\DB;

class OtherVaccinesController extends Controller
{
    public function otherVaccines()
    {
        $result=DB::select(DB::raw("SELECT vaccine_brand, COUNT(*) as total_vaccine_brand FROM vaccines WHERE NOT vaccine_type='COVID-19' GROUP BY vaccine_brand"));
        $chartData="";
        foreach($result as $list){
            $chartData.="['".$list->vaccine_brand."',   ".$list->total_vaccine_brand."],";
        }
        $arr['chartData']=rtrim($chartData,",");
        
        return view ('otherVaccines', $arr);
    }
}

