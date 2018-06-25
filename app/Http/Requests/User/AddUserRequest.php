<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            'name' => 'unique:pdf_users,user_name|min:6',
            'password' => 'min:6',
            'phone' => 'numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Tài khoản đã tồn tại',
            'name.min' => 'Tài khoản có độ dài tối thiểu 6 ký tự',
            'password.min' => 'Mật khẩu có độ dài tối thiểu 6 ký tự',
            'phone.numeric' => 'Vui lòng nhập đúng số điện thoại'
        ];

    }
}
