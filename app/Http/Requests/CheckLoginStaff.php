<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CheckLoginStaff extends Request
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

    public function messages()
    {
        return [
            'coderoom.required' => 'Bạn phải nhập mã phòng khám của mình',
            'email.required'  => 'Bạn phải nhập Email của mình',
            'email.email'  => 'Email không chính xác cú pháp',     
            'password.required' => 'Bạn phải nhập mật khẩu',
        

        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'coderoom'=>'required',
            'email' => 'required|email',
            'password' => 'required',
        ];
    }
}
