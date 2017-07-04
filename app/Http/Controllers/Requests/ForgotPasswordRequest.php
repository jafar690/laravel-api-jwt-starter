<?php

namespace App\Http\Controllers\Requests;

use Config;
use Dingo\Api\Http\FormRequest;

class ForgotPasswordRequest extends FormRequest
{
    public function rules()
    {
        return Config::get('boilerplate.forgot_password.validation_rules');
    }

    public function authorize()
    {
        return true;
    }
}
