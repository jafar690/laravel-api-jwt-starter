<?php

namespace App\Http\Controllers\Requests;

use Dingo\Api\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
