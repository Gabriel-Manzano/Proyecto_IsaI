<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorAdminHotel extends FormRequest
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
            'txtnameadmhot' => 'required|string|min:3|max:100',
            'txtubicacionadmhot' => 'required|string|min:5|max:255',
            'txtprecioadmhot' => 'required|numeric|min:0|max:99999.99',
            'txtestrellasadmhot' => 'required|integer|min:1|max:5',
            'txttipoadmhot' => 'required|string|min:3|max:50',
            'txthabitacionesadmhot' => 'required|integer|min:1|max:10000',
            'txthuespedesadmhot' => 'required|integer|min:1|max:50000',
            'txtdistanciaadmhot' => 'required|numeric|min:0|max:100000',
            'txtpoliticasadmhot' => 'required|string|min:5|max:500',
            'disponibilidad' => 'required|in:Disponible,No disponible',
        ];
    }
}
