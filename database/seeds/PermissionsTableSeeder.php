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
    }
}
