<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $admin_polda = Role::create(['name'=> 'Admin Polda']);
        $admin_polsek = Role::create(['name'=> 'Admin Polsek']);
        $admin_polres = Role::create(['name'=> 'Admin Polres']);

        $personel = Role::create(['name'=> 'Personel']);

        $admin->givePermissionTo([
            'create-role',
            'edit-role',
            'delete-role',
            'create-user',
            'edit-user',
            'delete-user',
        ]);


        // $superAdmin->givePermissionTo([
        //     'create-role',
        //     'edit-role',
        //     'delete-role',
        //     'create-user',
        //     'edit-user',
        //     'delete-user',
        // ]);
    }
}
