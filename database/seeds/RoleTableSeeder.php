<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'Developer';
        $role_admin->save();

        $role_maintenance = new Role();
        $role_maintenance->name = 'Maintenance Department';
        $role_maintenance->description = 'A Manager User';
        $role_maintenance->save();

        $role_irrigation = new Role();
        $role_irrigation->name = 'Irrigation Association';
        $role_irrigation->description = 'A IA';
        $role_irrigation->save();

        $role_construction = new Role();
        $role_construction->name = 'Construction Structures';
        $role_construction->description = 'A Construction Structures';
        $role_construction->save();

        $role_billings = new Role();
        $role_billings->name = 'Billings';
        $role_billings->description = 'A Billing Department';
        $role_billings->save();
        
        $role_permits = new Role();
        $role_permits->name = 'Permits';
        $role_permits->description = 'A Permit Department';
        $role_permits->save();

        $role_client = new Role();
        $role_client->name = 'Client';
        $role_client->description = 'A Normal Client';
        $role_client->save();
    }
}
