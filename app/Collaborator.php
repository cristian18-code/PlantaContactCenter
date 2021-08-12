<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    protected $fillable = [
        'cedula',
        'nombre',
        'Fingreso',
        'contrato',
        'supervisor',
        'campania',
        'cargoNomina',
        'sueldo',
    ];
}
