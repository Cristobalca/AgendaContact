<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
          'Nombre' => 'required',
        //   'Apellido' => 'required',
          'Sexo' => 'required',
          'Telefono' => 'required',
          'Correo' => 'required|unique:contacts',
          'Casado' =>  'required',
        //   'FechaNacimiento' => 'required'
        ];
    }
}
