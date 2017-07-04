<?php

namespace App\Http\Controllers\Requests;

use Dingo\Api\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules()
    {

	    return [
	    
	        'name' => 'required',
	        'email' => 'required|email',
	        'password' => 'required'
	    ];

    }

    public function authorize()
    {
        return true;
    }
}
