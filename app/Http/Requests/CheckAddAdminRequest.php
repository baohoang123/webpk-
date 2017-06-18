<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CheckAddAdminRequest extends Request
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
    public function messages()
    {
        return [
            'name.required' => 'Bạn chưa nhập họ tên đầy đủ',
            'email.required'  => 'Bạn phải nhập Email của mình',
            'email.email'  => 'Email không chính xác cú pháp',
            'email.unique'  => 'Email đã tồn tại',
            'password.required' => 'Bạn phải nhập mật khẩu', 
            'image.required' => 'Bạn phải gửi một hình ảnh của mình'
        ];
    }

    public function rules()
    {
        return [
            //
           'name' => 'required',
           'email' => 'required|email|unique:users',
           'password'=> 'required',
           'image' => 'required'
        ];
    }
}
