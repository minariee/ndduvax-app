<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use App\Models\VaccineType;
use App\Models\Account;
use Illuminate\Support\Facades\DB;

class UsersStatisticsController extends Controller
{
    public function userstatistics()
    {
        $result=DB::select(DB::raw("SELECT occupation, COUNT(*) as total_user_occupation FROM accounts GROUP BY occupation"));
        $chartData="";
        foreach($result as $list){
            $chartData.="['".$list->occupation."',   ".$list->total_user_occupation."],";
        }
        $arr['chartData']=rtrim($chartData,",");
        
        return view ('UsersStatistics', $arr);
    }
}

