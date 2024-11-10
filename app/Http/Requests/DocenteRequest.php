<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocenteRequest extends FormRequest
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
			'nombre' => 'required|string',
			'apellido' => 'required|string',
			'email' => 'required|string',
			'telefono' => 'required|string',
			'departamento' => 'required|string',
			'fecha_contratacion' => 'required',
			'estado_empleo' => 'required|string',
        ];
    }
}
