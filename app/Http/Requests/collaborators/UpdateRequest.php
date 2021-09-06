<?php

namespace App\Http\Requests\collaborators;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
        if ($this->create ==  "true") {
            return [
                // create
                'nombre'=>'required|string|max:255',
                'Fingreso'=>'required|date',
                'contrato'=>'required|string|max:255',
                'supervisor'=>'required|string|max:255',
                'campania'=>'required|string|max:255',
                'cargoNomina'=>'required|string|max:255',
                'sueldo'=>'required|integer',
                // update
                'Fnacimiento'=>'date',
                'genero'=>'string|exists:collaborators,genero|max:255',
                'genero'=>'string|exists:collaborators,genero|max:255',
                'localidad'=>'string|max:255|exists:collaborators,localidad',
                'barrio'=>'string|max:255',
                'hijos'=>'string|max:10',
                'estrato'=>'integer|digits_between:1,2|max:10',
                'nivelEstudio'=>'string|max:255|exists:collaborators,nivelEstudio',
            ];
        } else {
            return [
                // update
                'Fnacimiento'=>'required|date',
                'genero'=>'required|string|exists:collaborators,genero|max:255',
                'localidad'=>'required|string|max:255|exists:collaborators,localidad',
                'barrio'=>'required|string|max:255',
                'hijos'=>'required|string|max:10',
                'estrato'=>'required|integer|digits_between:1,2|max:10',
                'nivelEstudio'=>'required|string|max:255|exists:collaborators,nivelEstudio',
            ];
        }
    }

    public function messages()
    {
        if ($this->create ==  "false") {
            return [
                // create
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
    
                // update
                'Fnacimiento.required'=>'Este campo es requerido',
                'Fnacimiento.date'=>'El valor no es correcto',

                'genero.string '=>'El valor no es correcto',
                'genero.exists'=>'El genero ingresado no existe.',
                'genero.max'=>'Se permiten como maximo 255 caracteres',
    
                'localidad.required'=>'Este campo es requerido',
                'localidad.string'=>'El valor no es correcto',
                'localidad.max'=>'Se permiten como maximo 255 caracteres',
                'localidad.exists'=>'La localidad ingresada no existe.',
    
                'barrio.required'=>'Este campo es requerido',
                'barrio.string'=>'El valor no es correcto',
                'barrio.max'=>'Se permiten como maximo 255 caracteres',
                
                
                'hijos.required'=>'Este campo es requerido',
                'hijos.string'=>'El valor no es correcto',
                'hijos.max'=>'Se permiten como maximo 10 caracteres',
    
                'estrato.required'=>'Este campo es requerido',
                'estrato.integer'=>'El valor no es correcto',
                'estrato.digits_between'=>'Se permiten como maximo 2 caracteres',
                'estrato.max'=>'El valor maximo ingresado puede ser 10',
    
                'nivelEstudio.required'=>'Este campo es requerido',
                'nivelEstudio.string'=>'El valor no es correcto',
                'nivelEstudio.max'=>'Solo se permiten 255 caracteres',
                'nivelEstudio.exists'=>'El nivel de estudio ingresado no existe.',
            ];
        } else {
            return [
                // update
                'Fnacimiento.required'=>'Este campo es requerido',
                'Fnacimiento.date'=>'El valor no es correcto',

                'genero.string '=>'El valor no es correcto',
                'genero.exists'=>'El genero ingresado no existe.',
                'genero.max'=>'Se permiten como maximo 255 caracteres',
    
                'localidad.required'=>'Este campo es requerido',
                'localidad.string'=>'El valor no es correcto',
                'localidad.max'=>'Se permiten como maximo 255 caracteres',
                'localidad.exists'=>'La localidad ingresada no existe.',
    
                'barrio.required'=>'Este campo es requerido',
                'barrio.string'=>'El valor no es correcto',
                'barrio.max'=>'Se permiten como maximo 255 caracteres',               
                
                'hijos.required'=>'Este campo es requerido',
                'hijos.string'=>'El valor no es correcto',
                'hijos.max'=>'Se permiten como maximo 10 caracteres',
    
                'estrato.required'=>'Este campo es requerido',
                'estrato.integer'=>'El valor no es correcto',
                'estrato.digits_between'=>'Se permiten como maximo 2 caracteres',
                'estrato.max'=>'El valor maximo ingresado puede ser 10',
    
                'nivelEstudio.required'=>'Este campo es requerido',
                'nivelEstudio.string'=>'El valor no es correcto',
                'nivelEstudio.max'=>'Solo se permiten 255 caracteres',
                'nivelEstudio.exists'=>'El nivel de estudio ingresado no existe.',
            ];
        }
    }
}