<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

class CheckFormRequest extends Request
{
   
public function messages()
{
    return [
        'fullname.required' => 'Bạn chưa nhập họ tên đầy đủ',
        'email.required'  => 'Bạn phải nhập Email của mình',
        'email.email'  => 'Email không chính xác cú pháp',
        'email.unique'  => 'Email đã tồn tại',
        'password.required' => 'Bạn phải nhập mật khẩu',
        'password_confirmation.same' => 'Mật khẩu không khớp',
        'password_confirmation.required' => 'Bạn chưa nhập lại mật khẩu',
        'idnumber.numeric' => 'Không phải số chứng minh thứ',
        'idnumber.required' => 'Bạn chưa nhập số chứng minh thứ của mình',
        'idnumber.max' => 'Số chứng minh của bạn không chính xác',
        'image.required' => 'Bạn phải gửi một hình ảnh của mình'
    ];
}
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
            
            'fullname' => 'required',
            'email' => 'required|unique:clinicusers|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'idnumber' => 'required|numeric|max:1000000000',     
            'image' => 'required'
            
                
        ];
      
    }
}
