<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'super admin',
            'email' => 'admin@mailinator.com',
            'password' => Hash::make('123456789'),
            'mobile_number' => '09171338178',
        ]);

        $admin->assignRole($adminRole);

        $user = User::create([
            'name' => 'Jam Letigio',
            'email' => 'jam@mailinator.com',
            'password' => Hash::make('123456789'),
            'mobile_number' => '09171338178',
        ]);
        $user->assignRole($userRole);
    }
}
