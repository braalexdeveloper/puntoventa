<?php

namespace App\Http\Requests\Provider;

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
            'name'=>'required|string|max:255',
            'email'=>'required|email|string|max:200|unique:providers',
            'ruc_number'=>'required|string|max:11|min:11|unique:providers',
            'address'=>'nullable|string|max:255',
            'phone'=>'required|string|max:9|min:9|unique:providers',
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Este campo es requerido',
            'name.string'=>'El valor no es correcto',
            'name.max'=>'Solo se permite 255 caracteres',

            'email.required'=>'Este campo es requerido',
            'email.email'=>'No es un correo electronico',
            'email.string'=>'El valor no es correcto',
            'email.max'=>'Solo se permite 200 caracteres',
            'email.unique'=>'Ya se encuentra registrado',

            'ruc_number.required'=>'Este campo es requerido',
            'ruc_number.string'=>'El valor no es correcto',
            'ruc_number.max'=>'Solo se permite 11 caracteres',
            'ruc_number.min'=>'Se require 11 caracteres',
            'ruc_number.unique'=>'Ya se encuentra registrado',
            
            'address.max'=>'Solo se permite 255 caracteres',
            'address.string'=>'El valor no es correcto',
            
            'phone.required'=>'Este campo es requerido',
            'phone.string'=>'El valor no es correcto',
            'phone.max'=>'Solo se permite 9 caracteres',
            'phone.min'=>'Se require 9 caracteres',
            'phone.unique'=>'Ya se encuentra registrado',
        ];
    }

}
