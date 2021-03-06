<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class EditAdminRequest extends FormRequest
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
            'email' => 'required|unique:pdf_users,user_email,'.Auth::user()->user_id.',user_id',
            'phone' => 'numeric'
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'Địa chỉ Email đã tồn tại!',
            'email.required' => 'Vui lòng điền địa chỉ Email',
            'phone.numeric' => 'Vui lòng nhập đúng số điện thoại'
        ];
    }
}
