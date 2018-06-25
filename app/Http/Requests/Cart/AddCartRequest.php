<?php

namespace App\Http\Requests\Cart;

use Illuminate\Foundation\Http\FormRequest;

class AddCartRequest extends FormRequest
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
            'qty' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'qty.required' => 'Vui lòng nhập số lượng sản phẩm',
            'qty.numeric' => 'Vui lòng nhập số lượng sản phẩm',
        ];
    }
}
