<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorRegistro extends FormRequest
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
            'txtnamereg' => 'required|string|min:3|max:50',
            'txtapellidoreg' => 'required|string|min:3|max:50',
            'txtemailreg'=>'required|email:rfc,dns',
            'txttelreg' => 'required|min:10|max:15',
            'txtpasswordreg' => 'required|string|min:8|max:20|regex:/[A-Za-z]/|regex:/[0-9]/'
        ];
    }
}
