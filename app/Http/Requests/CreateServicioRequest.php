<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServicioRequest extends FormRequest
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
            'titulo' => 'required',
            'description' => 'required'
            //
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required' => 'Se nesesita un titulo para el servicio',
            'description.required' => 'Se nesesita un descripcion, es nesesaria'
            //
        ];
    }

}
