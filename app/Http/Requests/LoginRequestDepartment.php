<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequestDepartment extends FormRequest
{
    public function rules()
    {
        return [
            'email' => 'required|email|exists:departments',
            'password' => 'required'
        ];
    }
}
