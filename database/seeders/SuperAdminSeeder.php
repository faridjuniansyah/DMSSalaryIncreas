<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::create([
            'name' => 'superadmin', 
            'email' => 'superadmin@mail.com',
            'nrp' => '00000',
            'password' => Hash::make('123456')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'admin', 
            'email' => 'admin@mail.com',
            'nrp' => '44444',
            'password' => Hash::make('123456')
        ]);
        $admin->assignRole('Admin');

        $admin = User::create([
            'name' => 'admin polda', 
            'email' => 'adminpolda@mail.com',
            'nrp' => '333333',
            'password' => Hash::make('123456')
        ]);
        $admin->assignRole('Admin Polda');

        $admin = User::create([
            'name' => 'adminpolsek', 
            'email' => 'adminpolsek@mail.com',
            'nrp' => '11111',
            'password' => Hash::make('123456')
        ]);
        $admin->assignRole('Admin Polsek');
       
        $admin = User::create([
            'name' => 'adminpolres', 
            'email' => 'adminpolres@mail.com',
            'nrp' => '22222',
            'password' => Hash::make('123456')
        ]);
        $admin->assignRole('Admin Polres');

    }
}
