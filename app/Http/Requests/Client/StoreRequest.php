<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'string|required|max:255',
            'dni'=>'string|required|unique:clients|max:8',
            'ruc'=>'string|unique:clients|max:11',
            'address'=>'string|max:255',
            'phone'=>'string|unique:clients|max:9',
            'email'=>'string|unique:clients|max:255|email:rfc,dns',
            
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Este campo es requerido',
            'name.string'=>'El valor no es correcto',
            'name.max'=>'Solo se permite 255 caracteres',

            'dni.string'=>'El valor no es correcto',
            'dni.required'=>'Este campo es requerido',
            'dni.unique'=>'Este DNI ya se encuentra registrado',
            'dni.max'=>'Solo se permite 8 caracteres',
            'dni.min'=>'Se require 8 caracteres',

            'ruc.string'=>'El valor no es correcto',
            'ruc.unique'=>'Este Ruc ya se encuentra registrado',
            'ruc.max'=>'Solo se permite 11 caracteres',
            'ruc.min'=>'Se require 11 caracteres',

            'address.string'=>'El valor no es correcto',
            'address.max'=>'Solo se permite 255 caracteres',

            'phone.string'=>'El valor no es correcto',
            'phone.max'=>'Solo se permite 9 caracteres',
            'phone.min'=>'Se require 9 caracteres',
            'phone.unique'=>'Ya se encuentra registrado',

            
            'email.email'=>'No es un correo electronico',
            'email.string'=>'El valor no es correcto',
            'email.max'=>'Solo se permite 200 caracteres',
            'email.unique'=>'Ya se encuentra registrado',
            
         ];
    }

}
