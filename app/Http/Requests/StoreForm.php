<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:190',
            'phone' => 'required|min:10|max:12|numeric',
            'email' => 'required|email',
            'subject' => 'required|max:190',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'El nombre es requerido',
            'name.max' => 'El número máximo de caracteres en el nombre es de 190',
            
            'phone.required' => 'El teléfono es requerido',
            'phone.min' => 'El teléfono debe tener mínimo 10 dígitos',
            'phone.max' => 'El teléfono debe tener mínimo 12 dígitos',
            'phone.numeric' => 'El teléfono debe tener caracteres numéricos',

            'email.required' => 'El correo es requerido',
            'email.email' => 'El campo "email" debe ser escrito como un correo electrónico',
            
            'subject.required' => 'El asunto es requerido',
            'subject.max' => 'El número máximo de caracteres en el asunto es de 190',
        ];
    }
}
