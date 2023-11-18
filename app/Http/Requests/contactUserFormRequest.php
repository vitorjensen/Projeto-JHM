<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactUserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'name' => 'required|string|max:100|min:5',
           'email' => 'required|email|',
        ];
    }

    public function messages()
    {
        return[
            'required' => 'Campo obrigatório!',
            'email' => 'Digite um endereço de Email válido!',
            'max' => 'Este campo deve conter no máximo :max caractéres!',
            'min' => 'Este campo deve conter no mínimo :min caractéres!',
        ];
    }
}
