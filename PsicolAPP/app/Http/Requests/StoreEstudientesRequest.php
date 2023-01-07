<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEstudientesRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'documento' => ['required', 'integer'],
            'nombres' => ['required', 'min:3', 'max:100'],
            'telefono' => ['required', 'min:3', 'max:20'],
            'email' => ['required', 'max:60'],
            'direccion' => ['required', 'min:3', 'max:100'],
            'ciudad' => ['required', 'min:3', 'max:40'],
            'semestre' => ['required', 'integer', 'between:1,10'],
        ];
    }
}
