<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_admin = Role::where('name', 'Admin')->first();
        $role_maintenace  = Role::where('name', 'Maintenance Department')->first();
        $role_irrigation  = Role::where('name', 'Irrigation Association')->first();
        $role_construction  = Role::where('name', 'Construction Structures')->first();
        $role_billings  = Role::where('name', 'Billings')->first();
        $role_permits  = Role::where('name', 'Permits')->first();
        $role_permits  = Role::where('name', 'Client')->first();


    $employee = new User();
    $employee->name = 'Admin Nia';
    $employee->email = 'adminNIA@gmail.com';
    $employee->password = bcrypt('admin123');
    $employee->save();
    $employee->roles()->attach($role_admin);


    $manager = new User();
    $manager->name = 'Maintenance Personel';
    $manager->email = 'maintenanceSector@gmail.com';
    $manager->password = bcrypt('secret');
    $manager->save();
    $manager->roles()->attach($role_maintenace);

    $manager = new User();
    $manager->name = 'Irrigation Personel';
    $manager->email = 'irrigationSector@gmail.com';
    $manager->password = bcrypt('secret');
    $manager->save();
    $manager->roles()->attach($role_irrigation);

    $manager = new User();
    $manager->name = 'Contstruction Personel';
    $manager->email = 'contstructionSector@gmail.com';
    $manager->password = bcrypt('secret');
    $manager->save();
    $manager->roles()->attach($role_construction);

    $manager = new User();
    $manager->name = 'Billing Personel';
    $manager->email = 'billingSector@gmail.com';
    $manager->password = bcrypt('secret');
    $manager->save();
    $manager->roles()->attach($role_billings);

    $manager = new User();
    $manager->name = 'Permits Personel';
    $manager->email = 'permitSector@gmail.com';
    $manager->password = bcrypt('secret');
    $manager->save();
    $manager->roles()->attach($role_permits);

    $manager = new User();
    $manager->name = 'Client';
    $manager->email = 'niauser@gmail.com';
    $manager->password = bcrypt('secret');
    $manager->save();
    $manager->roles()->attach($role_permits);
    }
}
