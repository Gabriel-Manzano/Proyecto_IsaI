<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorHotel extends FormRequest
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
            'datcheckin' => 'required|date|after_or_equal:today',
            'datcheckout' => 'required|date|after:datcheckin',
            'txthuespedes' => 'required|integer|min:1|max:25'
        ];
    }
}
