<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorAdminVuelos extends FormRequest
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
            'numero_vuelo' => 'required|string|min:3|max:20',
            'aerolinea' => 'required|string|min:3|max:100',
            'precio' => 'required|numeric|min:0|max:999999.99',
            'has_stopovers' => 'required|boolean',
            'departure_time' => 'required|date|after_or_equal:today',
            'arrival_time' => 'required|date|after:departure_time',
            'duracion_vuelo' => 'required|integer|min:0',
            'escalas' => 'nullable|integer|min:0|max:10',
            'origen' => 'required|string|min:3|max:100',
            'destino' => 'required|string|min:3|max:100',
            'pasajeros' => 'required|integer|min:1|max:1000',
        ];

    }
}
