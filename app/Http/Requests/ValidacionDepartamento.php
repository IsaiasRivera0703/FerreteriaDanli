<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionDepartamento extends FormRequest
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
            'Nombre_departamento' => 'required|unique:departamento,Nombre_departamento'. $this->route('id'),
            'Numero_departamento' => 'required|unique:departamento,Numero_departamento'. $this->route('id'),
        ];
    }
}
