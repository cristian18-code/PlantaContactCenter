<?php

namespace App\Exports;

use App\Collaborator;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;

class CollaboratorsExport implements FromQuery, WithHeadings
{

    public function headings(): array
    {
        return [
            '#',
            'Cedula',
            'Nombre',
            'Expedida',
            'Fecha de nacimiento',
            'Fecha de ingreso',
            'Fin de contrato',
            'Contrato',
            'Supervisor',
            'Campaña',
            'Cargo en nomina',
            'Llave',
            'CECO',
            'NomCeco',
            'Estado',
            'Sueldo',
            'Distribucion',
            'Site',
            'Login',
            'Mes',
            'Tipo',
            'Genero',
            'Localidad',
            'Estrato',
            'Hijos',
            'Nivel de esutudio',
            'Barrio',
            'Periodos pendientes',
            'Vacaciones',
            'Dia de familia',
            'Mes de familia',
            'Estado dia de familia',
            'Fecha de registro',
            'Fecha de Actualizacion',
        ];
    }
    
    public function query()
    {
        if (Auth::user()->roles[0]->name == 'Supervisor') {
            return Collaborator::query()->where('supervisor', Auth::user()->name);
        } else {
            return Collaborator::query();
        }
    }
}