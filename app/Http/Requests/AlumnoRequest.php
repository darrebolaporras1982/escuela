<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombreApellidos'=>'required | min:3 | max:50',
            'edad'=>'required',
            'direccion'=>'required',
            'telefono'=>'required | min:8 | max:9'
        ];
    }
    public function messages():array
    {
        return [
        'nombreApellidos.require'=>'Este campo nombreApellidos es obligatorio',
        'nombreApellidos.min'=>'Minimo de caracteres es de 3',
        'nombreApellidos.max'=>'Máximo de caracteres es de 50',
        'edad.require'=>'Este campo edad es obligatorio',
        'direccion.require'=>'Este campo direccion es obligatorio',
        'telefono.require'=>'Este campo telefono es obligatorio'
        ];
    }
}
