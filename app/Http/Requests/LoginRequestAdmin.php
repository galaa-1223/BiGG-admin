<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequestAdmin extends FormRequest
{
    public function rules()
    {
        return [
            'email' => 'required|email|exists:admins',
            'password' => 'required'
        ];
    }
}
