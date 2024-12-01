<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorUsuarios extends FormRequest
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
            'txtnombreadm' => 'required|string|min:3|max:50',
            'txtapellidoadm' => 'required|string|min:3|max:50',
            'txtemailadm' => 'required|email:rfc,dns',
            'txttelefonoadm' => 'required|min:10|max:15',
            'txtpasswordadm' => 'required|string|min:8|max:20|regex:/[A-Za-z]/|regex:/[0-9]/'
        ];
    }

}
