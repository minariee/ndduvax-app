<?php

namespace Database\Seeders;

use App\Models\VaccineType;
use Illuminate\Database\Seeder;

class VaccineTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VaccineType::insert([
            ['brand_name' => 'Pfizer', 'type_name' => 'COVID-19'],
            ['brand_name' => 'Moderna', 'type_name' => 'COVID-19'],
            ['brand_name'=> 'Sinovac', 'type_name' => 'COVID-19'],
        ]);
    }
}
