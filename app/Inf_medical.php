<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inf_medical extends Model
{
    protected $fillable = [
        'eps', 'plan_mp', 'alergias', 'medicamentos', 'antecedentes', 'peso', 'estatura', 'rh'
    ];
}
