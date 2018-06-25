<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class EditCateRequest extends FormRequest
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
            'catetitle' => 'unique:pdf_categories,category_title,'.$this->segment(5).',category_id'
        ];
    }

    public function messages()
    {
        return [
            'catetitle.unique' => 'Tên danh mục đã tồn tại!'
        ];
    }
}
