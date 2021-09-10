<?php

namespace App\Exports;

use App\Collaborator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;


class CollaboratorsExport implements FromQuery, WithHeadings, WithMapping
{

    public function headings(): array
    {
        return [
            'Cedula',
            'Nombre',
            'Fecha de nacimiento',
            'Edad',
            'Fecha de ingreso',
            'Fecha terminacion de contrato',
            'Motivo de retiro',
            'Contrato',
            'Supervisor',
            'Campaña',
            'Cargo en nomina',
            'Estado',
            'Sueldo',
            'Correo',
            'Celular',
            'Site',
            'Login',
            'Tipo',
            'Genero',
            'Localidad',
            'Estrato',
            'Hijos',
            'Barrio',
            'Vacaciones',
            'Dia de familia',
            'Mes de familia',
            'Estado dia de familia',
            'Eps',
            'Plan MP',
            'Medicamentos',
            'Antecedentes',
            'Peso',
            'Estatura',
            'RH',
            
        ];
    }

    public function map($collaborator): array
    {
        $edad = Carbon::createFromDate($collaborator->Fnacimiento)->age;
        $collaborator->sueldo = number_format($collaborator->sueldo);
        return [
            $collaborator->cedula, $collaborator->nombre, $collaborator->Fnacimiento, $edad, $collaborator->Fingreso,
            $collaborator->finContrato, $collaborator->motivoRetiro, $collaborator->contrato, $collaborator->supervisor, $collaborator->campania,
            $collaborator->cargoNomina, $collaborator->estado, $collaborator->sueldo, $collaborator->correo,
            $collaborator->celular, $collaborator->site, $collaborator->login, $collaborator->tipo, $collaborator->genero,
            $collaborator->localidad, $collaborator->estrato, $collaborator->hijos, $collaborator->barrio,
            $collaborator->vacaciones, $collaborator->Fdia_familia, $collaborator->mesDiaFamilia, $collaborator->val_diaFamilia,
            @$collaborator->inf_medical->eps, @$collaborator->inf_medical->plan_mp, @$collaborator->inf_medical->medicamentos, @$collaborator->inf_medical->antecedentes,
            @$collaborator->inf_medical->peso, @$collaborator->inf_medical->estatura, @$collaborator->inf_medical->rh
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