<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAsignaturasRequest extends FormRequest
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
            'nombre' => ['required', 'min:3', 'max:100'],
            'descripcion' => ['required', 'min:3', 'max:200'],
            'creditos' => ['required', 'integer', 'between:1,20'],
            'area' => ['required', 'min:3', 'max:200'],
            'tipo' => ['required', 'min:3', 'max:200']
        ];
    }
}
