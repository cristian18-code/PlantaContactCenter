<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inf_familier extends Model
{
    protected $fillable = [
        'nombre', 'fNacimiento', 'genero', 'ocupacion', 'parentesco', 'celular', 'emergencia'
    ];
}
