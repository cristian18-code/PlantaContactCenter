<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novelty extends Model
{
    protected $fillable = [
        'collaborator_id', 'novedad', 'Finicio', 'Ffin', 'observaciones', 'estado'
    ];

    public function collaborator()
    {
        return $this->belongsTo(Collaborator::class);
    }
}