<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarsFormRequest extends FormRequest
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
            'vehicle_brand' => 'required',
            'vehicle_model' => 'required',
            'vehicle_year_manufacture' => 'required',
            'vehicle_license_plate' => 'required',
            'cart_capacity' => 'required',
            'cart_number_axles' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'vehicle_brand.required' => 'O campo MARCA é obrigatório!',
            'vehicle_model.required' => 'O campo MODELO é obrigatório!',
            'vehicle_year_manufacture.required' => 'O campo ANO DE FABRICAÇÃO é obrigatório!',
            'vehicle_license_plate.required' => 'O campo PLACA é obrigatório!',
            'cart_capacity.required' => 'O campo CAPACIDADE DE CARGA é obrigatório!',
            'cart_number_axles.required' => 'O campo NÚMERO DE EIXOS é obrigatório!'
        ];
    }
}
