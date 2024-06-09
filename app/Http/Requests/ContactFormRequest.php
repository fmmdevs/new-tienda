<?php

// app/Http/Requests/ContactFormRequest.php// app/Http/Requests/ContactFormRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:25',
            'city' => 'required|string|max:25',
            'email' => 'required|email',
            'message' => 'required|string',
        ];
    }
}
