<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{

    protected $fillable = [
        'cedula', 'nombre', 'Fingreso', 'contrato', 'supervisor', 'campania', 'cargoNomina', 'sueldo', 'finContrato', 'motivoRetiro',
        'Fnacimiento', 'genero', 'correo', 'celular', 'localidad', 'barrio', 'image', 'hijos', 'estrato', 'estado'
    ];
    
    public function inf_medical()
    {
        return $this->hasOne(Inf_medical::class);
    }

    public function studies()
    {
        return $this->hasMany(Study::class);
    }

    public function familiers()
    {
        return $this->hasMany(Inf_familier::class);
    }

    public function novelties(){
        return $this->hasMany(Novelty::class);
    }

}