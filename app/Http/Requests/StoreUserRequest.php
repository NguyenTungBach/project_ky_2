<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric|min:10',
            'email' => 'required',
            'password' => 'required',
            'confirmPassword' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên.',
            'address.required' => 'Vui lòng nhập thông tin địa chỉ',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.numeric' => 'Phải là số điện thoại',
            'phone.min' => 'Số điện thoại phải đủ 10 số',
            'email.required' => 'Vui lòng nhập email',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'confirmPassword.required' => 'Vui lòng nhập lại mật khẩu',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if($this->get('password') != $this->get('confirmPassword')){
                $validator->errors()->add('confirmPassword', 'Mật khẩu không trùng khớp');
            }
        });
    }
}
