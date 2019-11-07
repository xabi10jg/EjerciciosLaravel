<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
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
            'nombre'=>'required|string|min:2|max:15',
            'apellido'=>'required|string|min:2|max:20',
            'email'=>'required|email',
            'telefono'=>'regex:/^[679][0-9]{8}$/'

            
        ];
    }
    public function messages(){

        return[
            'nombre.required'=>'Introduce un nombre por favor'
        ];
    }
}
