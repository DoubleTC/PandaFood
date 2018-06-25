<?php

namespace App\Http\Requests\Shipper;

use Illuminate\Foundation\Http\FormRequest;

class EditShipperRequest extends FormRequest
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
            'name' => 'unique:pdf_shippers,shipper_name,'.$this->segment(5).',shipper_id',
            'phone' => 'numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Tên đối tác đã tồn tại!',
            'phone.numeric' => 'Vui lòng nhập đúng số điện thoại'
        ];
    }
}
