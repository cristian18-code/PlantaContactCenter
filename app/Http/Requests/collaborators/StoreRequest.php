<?php

namespace App\Http\Requests\collaborators;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cedula'=>'required|integer|unique:collaborators|digits_between:6,11',
            'nombre'=>'required|string|max:255',
            'Fingreso'=>'required|date',
            'contrato'=>'required|string|max:255',
            'supervisor'=>'required|string|max:255',
            'campania'=>'required|string|max:255',
            'cargoNomina'=>'required|string|max:255',
            'sueldo'=>'required|integer',
        ];
    }

        public function messages()
    {
        return [
            'cedula.required'=>'Este campo es requerido',
            'cedula.integer'=>'El valor no es correcto',
            'cedula.unique'=>'Esta cedula ya se encuentra registrada',
            'cedula.digits_between'=>'Se requieren minimo 6 y maximo 11 caracteres',

            'nombre.required'=>'Este campo es requerido',
            'nombre.string'=>'El valor no es correcto',
            'nombre.max'=>'Solo se permiten 11 caracteres',

            'Fingreso.required'=>'Este campo es requerido',
            'Fingreso.date'=>'El valor no es correcto',
            
            'contrato.required'=>'Este campo es requerido',
            'contrato.string'=>'El valor no es correcto',

            'supervisor.required'=>'Este campo es requerido',
            'supervisor.string'=>'El valor no es correcto',
            'supervisor.max'=>'Solo se permiten 255 caracteres',

            'campania.required'=>'Este campo es requerido',
            'campania.string'=>'El valor no es correcto',
            'campania.max'=>'Solo se permiten 255 caracteres',

            'cargoNomina.required'=>'Este campo es requerido',
            'cargoNomina.string'=>'El valor no es correcto',
            'cargoNomina.max'=>'Solo se permiten 255 caracteres',

            'sueldo.required'=>'Este campo es requerido',
            'sueldo.integer'=>'El valor debe ser numerico, no se permiten espacios, puntos ni comas',
        ];
    }
}