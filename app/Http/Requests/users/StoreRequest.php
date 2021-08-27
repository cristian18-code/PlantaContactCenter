<?php

namespace App\Http\Requests\users;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>['required','string','max:255','unique:users'],
            'username'=>'required|unique:users|string|max:100',
            'password'=>'required',
            'roles'=>'required|min:1|max:10'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Este campo es requerido',
            'name.string'=>'El valor debe ser tipo texto',
            'name.max'=>'El maximo de caracteres permitido es 255',
            'name.unique'=>'Este nombre ya existe',

            'username.required'=>'Este campo es requerido',
            'username.unique'=>'Este usuario ya existe',
            'username.string'=>'El valor debe ser tipo texto',
            'username.max'=>'El maximo de caracteres permitido es 100',

            'password.required'=>'Este campo es requerido',

            'roles.required'=>'Debe escoger un rol',
            'roles.min'=>'El valor debe ser superior a 1',
            'roles.max'=>'El valor debe ser inferior a 10',
        ];
    }
}
