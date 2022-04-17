<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use App\Models\VaccineType;
use Carbon\Carbon;

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

        return view('userDashboard', [
            'page_substitle' => 'User Dashboard',
            'year' => Carbon::now()->format('Y'),
            'dataset1Male' => $dataset1Male,
            'dataset1Female' => $dataset1Female,
            'months' => $months,
            'brands' => $brands,
        ]);
    }
}
