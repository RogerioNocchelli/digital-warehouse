<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DriversFormRequest extends FormRequest
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
            'name' => 'required',
            'document_number' => 'required',
            'phone_number' => 'required',
            'zip_code' => 'required',
            'street' => 'required',
            'number' => 'required',
            'neighborhood' => 'required',
            'city' => 'required',
            'state' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo NOME é obrigatório!',
            'document_number.required' => 'O campo CPF é obrigatório!',
            'phone_number.required' => 'O campo TELEFONE é obrigatório!',
            'zip_code.required' => 'O campo CEP é obrigatório!',
            'street.required' => 'O campo RUA é obrigatório!',
            'number.required' => 'O campo NÚMERO é obrigatório!',
            'neighborhood.required' => 'O campo BAIRRO é obrigatório!',
            'city.required' => 'O campo CIDADE é obrigatório!',
            'state.required' => 'O campo ESTADO é obrigatório!',
            ];
    }
}
