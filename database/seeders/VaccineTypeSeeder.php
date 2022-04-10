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
            ['brand_name' => 'Pizer'],
            ['brand_name' => 'Moderna'],
            ['brand_name' => 'Sinovac'],
        ]);
    }
}