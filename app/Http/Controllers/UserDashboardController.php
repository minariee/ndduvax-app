<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use App\Models\VaccineType;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserDashboardController extends Controller
{
    public function index()
    {
        $brands = VaccineType::orderBy('brand_name', 'asc')->get()->map(function ($brand) {
            return $brand->brand_name;
        });

        $range = [
            'start' => Carbon::now()->startOfYear(),
            'end' => Carbon::now()->endOfYear(),
        ];

        $current = $range['start']->clone();
        $months = collect([]);
        $dataset1Male = collect([]);
        $dataset1Female = collect([]);
        do {
            $startMonth = $current->format('Y-m-d');
            $endMonth = $current->clone()->endOfMonth()->format('Y-m-d');
            $months->push($current->format('M Y'));

            $countOfMonthMale = Vaccine::where('latest_dosage_date', '>=', $startMonth)
                ->where('latest_dosage_date', '<=', $endMonth)
                ->get()
                ->filter(function ($vax) {
                    return $vax->account->gender == 'male';
                })->count();

            $countOfMonthFemale = Vaccine::where('latest_dosage_date', '>=', $startMonth)
                ->where('latest_dosage_date', '<=', $endMonth)
                ->get()
                ->filter(function ($vax) {
                    return $vax->account->gender === 'female';
                })->count();
            $dataset1Male->push($countOfMonthMale);
            $dataset1Female->push($countOfMonthFemale);

            $current->addMonth();
        } while (!$current->gt($range['end']));

        $result=DB::select(DB::raw("SELECT vaccine_brand, COUNT(*) as total_vaccine_brand FROM vaccines WHERE vaccine_type='COVID-19' GROUP BY vaccine_brand"));
        $chartData="";
        foreach($result as $list){
            $chartData.="['".$list->vaccine_brand."',   ".$list->total_vaccine_brand."],";
        }

        return view('userdashboard', [
            'page_substitle' => 'User Dashboard',
            'year' => Carbon::now()->format('Y'),
            'dataset1Male' => $dataset1Male,
            'dataset1Female' => $dataset1Female,
            'months' => $months,
            'brands' => $brands,
            'chartData' => rtrim($chartData,","),
        ]);   
    }

    public function covidbrand()
    {
        $result=DB::select(DB::raw("SELECT vaccine_brand, COUNT(*) as total_vaccine_brand FROM vaccines WHERE vaccine_type='COVID-19' GROUP BY vaccine_brand"));
        $chartData="";
        foreach($result as $list){
            $chartData.="['".$list->vaccine_brand."',   ".$list->total_vaccine_brand."],";
        }
        $arr['chartData']=rtrim($chartData,",");
        $arr['year'] = Carbon::now()->format('Y');
        
        return view ('covidbrand', $arr);
    }


    /*public function coviddose()
    {
        $result=DB::select(DB::raw("SELECT current_dose, COUNT(*) as total_vaccine_dose FROM vaccines WHERE vaccine_type='COVID-19' GROUP BY current_dose"));
        $chartDose="";
        foreach($result as $list){
            $chartDose.="['".$list->current_dose"',   ".$list->total_vaccine_dose."],";
        }
        $arr['chartData']=rtrim($chartDose,",");
        
        return view ('userDashboard', $arr);
    }

    public function othervaccinetypes()
    {
        $result=DB::select(DB::raw("SELECT vaccine_brand, COUNT(*) as other_vaccine_brands FROM vaccines WHERE NOT vaccine_type='COVID-19' GROUP BY vaccine_brand;"));
        $chartDose="";
        foreach($result as $list){
            $chartDose.="['".$list->vaccine_brand."',   ".$list->other_vaccine_brands."],";
        }
        $arr['chartData']=rtrim($chartDose,",");
        
        return view ('userDashboard', $arr);
    }*/

    }
