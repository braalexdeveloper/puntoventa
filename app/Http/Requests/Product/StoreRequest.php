<?php

namespace App\Http\Requests\Product;

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
            'name'=>'string|required|unique:products|max:255',
            'image'=>'required',
            'sell_price'=>'required',
            'category_id'=>'integer|required',
            'provider_id'=>'integer|required',
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Este campo es requerido',
            'name.string'=>'El valor no es correcto',
            'name.unique'=>'El producto ya esta registrado',
            'name.max'=>'Solo se permite 255 caracteres',
            
            'image.required'=>'Este campo es requerido',
            

            'sell_price.required'=>'El campo es requerido',

            'category_id.integer'=>'El valor tiene que ser entero',
            'category_id.required'=>'El campo es requerido',
           
            
            'provider_id.integer'=>'El valor tiene que ser entero',
            'provider_id.required'=>'El campo es requerido',
            
        ];
    }
}
