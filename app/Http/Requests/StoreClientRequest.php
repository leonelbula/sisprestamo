<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
            'fullname'=>'required|max:45',
            'identification'=>'required|unique:clients,identification',
            'direction'=>'required',
            'town'=>'required|max:45',
            'department'=>'required|max:45',
            'phone'=>'required|max:20',
            'email'=>'required|max:45'
        ];
    }

    public function messages()
    {
        return [
            'fullname.required'=>'El campo nombre esta vacio',
            'identification.required'=>'El campo indentificacion esta vacio',
            'direction.required'=>'El campo direccion esta vacio',
            'town.required'=>'El campo ciudad esta vacio',
            'department.required'=>'El campo departamento esta vacio',
            'phone.required'=>'El campo telefono esta vacio',
            'email.required'=>'El campo email esta vacio',
            'identification.unique'=>'Existe un cliente registrado con esta Identificacion'
        ];
    }
}
