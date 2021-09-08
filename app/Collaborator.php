<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    protected $fillable = [
        'cedula', 'nombre', 'Fingreso', 'contrato', 'supervisor', 'campania', 'cargoNomina', 'sueldo',
        'Fnacimiento', 'genero', 'correo', 'celular', 'localidad', 'barrio', 'image', 'hijos', 'estrato', 'nivelEstudio', 'estado'
    ];
    
    public function inf_medical()
    {
        return $this->hasOne(Inf_medical::class);
    }

    public function studies()
    {
        return $this->hasMany(Study::class);
    }

    public function novelties(){
        return $this->hasMany(Novelty::class);
    }

}