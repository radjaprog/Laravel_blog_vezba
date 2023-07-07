<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()         // vraca niz sa pravilima
    {
        return [
            'title' => 'required|min:4',
            'body' => 'required|min:20',
        ];
    }
}

// <!-- Drugi Laravelov projekat Blog - vezbe -->