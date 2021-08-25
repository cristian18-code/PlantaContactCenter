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

        $user = User::create([
            'name'=>'Christian David Garzon Pinilla',
            'username'=>'christiangpi',
            'password'=>'$2y$10$o659zRAez9pUMycEbVPh0OxR1wU0PY2lreS7CERzIEL/RonaLYodi',
        ]);

        $user->roles()->sync(1);
    }
}
