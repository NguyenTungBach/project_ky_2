<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'password' => 'required|confirmed',
            'fullname' => 'required',
            'email' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'password.required'=>"Password cannot be blank",
            'confirmPassword.required'=>"Password cannot be blank",
            'fullname.required'=>"Fullname cannot be blank",
            'email.required'=>"Email cannot be blank",
        ];
    }
}
