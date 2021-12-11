<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogFarm extends FormRequest
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
            'url' => 'required|url',
            'farm_id' => 'required',
            'thumbnail' => 'required|url',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Vui lòng nhập tiêu đề bài viết',
            'farm_id.required' => 'Vui lòng chọn nhà vườn',
            'url.required' => 'Vui lòng nhập link sản phẩm',
            'url.url' => 'Phải là một url',
            'thumbnail.required' => 'Vui lòng nhập ảnh',
            'thumbnail.url' => 'Vui lòng nhập link ảnh',
            'description.required' => 'Vui lòng nhập nội dung',
        ];
    }
}
