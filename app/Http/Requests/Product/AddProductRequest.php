<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'img' => 'image',
            'name' => 'unique:pdf_products,product_name'
        ];
    }

    public function messages()
    {
        return [
            'img.image' => 'Tệp tải lên không phù hợp!',
            'name.unique' => 'Tên sản phẩm đã tồn tại!'
        ];
    }
}
