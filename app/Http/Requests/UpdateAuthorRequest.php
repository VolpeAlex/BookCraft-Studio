<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAuthorRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'birthday' => 'required|date|before_or_equal:today', // Aggiornata la regola per 'birthday'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Il nome è richiesto.',
            'name.max' => 'Non puoi superare i :max caratteri.',
            'birthday.required' => 'La data di nascita è richiesta.',
            'birthday.date' => 'La data di nascita deve essere valida.',
            'birthday.before_or_equal' => 'Inserisci una data di nascita corretta.',
        ];
    }
}
