<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new Generator();
        $adminRole = Role::create([
            'name' => 'admin',
        ]);
        $userRole = Role::create([
            'name' => 'user',
        ]);
        $personalRecordPermission = Permission::create([
            'name' => 'view personal record',
        ]);
        $userRole->givePermissionTo($personalRecordPermission);

        $admin = User::create([
            'email' => 'admin@mailinator.com',
            'password' => Hash::make('123456789'),
            'mobile_number' => '09171338178',
        ]);
        $admin->account()->create([
            'first_name' => 'super',
            'middle_name' => 'admin',
            'last_name' => 'account',
            'occupation' => 'nurse',
            'gender' => 'male',
        ]);

        $admin->assignRole($adminRole);
    }
}
