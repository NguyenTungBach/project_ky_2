<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'price' => 'required|numeric',
            'description' => 'required',
            'detail' => 'required',
            'category_id' => 'required',
            'thumbnail' => 'required|url'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên.',
            'price.required' => 'Vui lòng nhập giá.',
            'price.numeric' => 'Vui lòng nhập số nguyên',
            'description.required' => 'Vui lòng nhập thông tin',
            'detail.required' => 'Vui lòng nhập thông tin chi tiết',
            'thumbnail.required' => 'Vui lòng nhập ảnh',
            'thumbnail.url' => 'Vui lòng nhập link ảnh',
            'category_id.required' => 'Vui lòng chọn loại thực phẩm'
        ];
    }
}
