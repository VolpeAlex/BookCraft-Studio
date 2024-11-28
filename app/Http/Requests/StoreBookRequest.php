<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title' => 'required|string|max:100',
            'description' => 'string|max:800',
            'pages' => 'int|min:1',
            'author_id' => 'required',
            'category_id' => 'required',
        ];
    }
    public function messages():array{
        return[
            'title.required' => ' è richiesto',
            'title.max'=>'Non puoi superare i :max caratteri',
            'description.max'=>'Non puoi superare i :max caratteri',
            'pages.min'=>'Il minimo delle pagine è :min',
            'author_id.required' => 'Scegli un autore',
            'category_id.required'=>'Scegli una categoria'
        ];
    }
}

