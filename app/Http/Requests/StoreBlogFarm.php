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
            'product_id' => 'required',
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
            'product_id.required' => 'Vui lòng nhập mã sản phẩm',
            'thumbnail.required' => 'Vui lòng nhập ảnh',
            'thumbnail.url' => 'Vui lòng nhập link ảnh',
            'description.required' => 'Vui lòng nhập nội dung',
        ];
    }
}
