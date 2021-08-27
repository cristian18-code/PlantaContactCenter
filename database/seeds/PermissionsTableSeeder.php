<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // collaborators
        Permission::create([
            'name'=>'Listado de colaboradores',
            'slug'=>'collaborators.index',
            'description'=>'Permite ver el listado de los colaboradores.',
        ]);
        Permission::create([
            'name'=>'Detalles de colaboradores',
            'slug'=>'collaborators.show',
            'description'=>'Permite revisar los detalles de los colaboradores'
        ]);
        Permission::create([
            'name'=>'Editar colaboradores',
            'slug'=>'collaborators.edit',
            'description'=>'Permite editar los datos de los colaboradores'
        ]);
        Permission::create([
            'name'=>'Creacion de colaboradores',
            'slug'=>'collaborators.create',
            'description'=>'Permite registrar un nuevo colaborador.',
        ]);
        Permission::create([
            'name'=>'Eliminar colaborador',
            'slug'=>'collaborators.destroy',
            'description'=>'Permite la eliminacion de un colaborador.',
        ]);
        Permission::create([
            'name'=>'Estado colaborador',
            'slug'=>'collaborators.change_status',
            'description'=>'Permite editar el estado de un colaborador.',
        ]);

        // users
        Permission::create([
            'name'=>'listado de usuarios',
            'slug'=>'users.index',
            'description'=>'Permite ver el total de los usuarios registrados.',
        ]);
        // Permission::create([
        //     'name'=>'detalles de usuarios',
        //     'slug'=>'users.show',
        //     'description'=>'Permite ver los detalles de los usuarios registrados.',
        // ]);
        Permission::create([
            'name'=>'creacion de usuarios',
            'slug'=>'users.create',
            'description'=>'Permite registrar un nuevo usuario.',
        ]);
        Permission::create([
            'name'=>'edicion de usuarios',
            'slug'=>'users.edit',
            'description'=>'Permite editar algun usuario.',
        ]);
        Permission::create([
            'name'=>'eliminacion de usuarios',
            'slug'=>'users.destroy',
            'description'=>'Permite eliminar un usuario ya registrado.',
        ]);
        // roles
        Permission::create([
            'name'=>'listado de roles',
            'slug'=>'roles.index',
            'description'=>'Permite ver el total de los roles registrados.',
        ]);
        // Permission::create([
        //     'name'=>'detalles de usuarios',
        //     'slug'=>'roles.show',
        //     'description'=>'Permite ver los detalles de los usuarios registrados.',
        // ]);
        Permission::create([
            'name'=>'creacion de roles',
            'slug'=>'roles.create',
            'description'=>'Permite registrar un nuevo rol.',
        ]);
        Permission::create([
            'name'=>'edicion de roles',
            'slug'=>'roles.edit',
            'description'=>'Permite editar algun rol.',
        ]);
        Permission::create([
            'name'=>'eliminacion de roles',
            'slug'=>'roles.destroy',
            'description'=>'Permite eliminar un rol ya registrado.',
        ]);
    }
}
