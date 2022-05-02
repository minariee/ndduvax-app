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
            ['brand_name' => 'Pizer', 'type_name' => 'COVID-19', 'dosage' => 'First Dose'],
            ['brand_name' => 'Moderna', 'type_name' => 'COVID-19', 'dosage' => 'Second Dose'],
            ['brand_name'=> 'Sinovac', 'type_name' => 'COVID-19', 'dosage' => 'Booster'],
        ]);
    }
}
