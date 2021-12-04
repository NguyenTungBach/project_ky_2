<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'thumbnail' => 'required|url'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Vui lòng nhập tên.',
            'description.required' => 'Vui lòng nhập thông tin',
            'content.required' => 'Vui lòng nhập thông tin chi tiết',
            'thumbnail.required' => 'Vui lòng nhập ảnh',
            'thumbnail.url' => 'Vui lòng nhập link ảnh',
        ];
    }
}
