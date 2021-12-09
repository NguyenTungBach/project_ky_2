<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FarmRequest extends FormRequest
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
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'thumbnail' => 'required|url',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên trang trại',
            'address.required' => 'Vui lòng nhập địa chỉ trang trại',
            'email.required' => 'Vui lòng nhập email trang trại',
            'email.email' => 'Đây không phải email',
            'phone.required' => 'Vui lòng nhập số điện thoại trang trại',
            'phone.regex' => 'Đây không phải là số điện thoại',
            'phone.min' => 'Số điện thoại phải có 10 số',
            'thumbnail.required' => 'Vui lòng nhập ảnh',
            'thumbnail.url' => 'Vui lòng nhập link ảnh',
            'description.required' => 'Vui lòng nhập nội dung',
        ];
    }
}
