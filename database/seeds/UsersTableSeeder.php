<?php

use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'name'=>'Super administrador',
            'slug'=>'superadmin',
            'description'=>'Usuario que cuenta con permisos totales dentro del sistema',
            'special'=>'all-access',
        ]);

        Role::create([
            'name'=>'Administrador',
            'slug'=>'admin',
            'description'=>'Usuario que administra el sistema, no cuenta con permisos totales, pero si con la gran mayoria',
        ]);

        Role::create([
            'name'=>'Supervisor',
            'slug'=>'Supervisor',
            'description'=>'Usuario que edita y agrega informacion de sus colaboradores a cargo',
        ]);

        $user = User::create([
            'name'=>'Christian David Garzon Pinilla',
            'username'=>'christiangpi',
            'email'=>'christiangpi@medcontactcenter.com.co',
            'password'=>'$2y$10$o659zRAez9pUMycEbVPh0OxR1wU0PY2lreS7CERzIEL/RonaLYodi',
        ]);

        $user->roles()->sync(1);
    }
}
