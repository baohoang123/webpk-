<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CheckLogin extends Request
{
	public function messages()
{
    return [
     
        'email.required'  => 'Bạn phải nhập Email của mình',
        'email.email'  => 'Email không chính xác cú pháp',     
        'password.required' => 'Bạn phải nhập mật khẩu',
    

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
     public function rules()
    {
    	 return [
            
        
            'email' => 'required|email',
            'password' => 'required',
   

        ];
      
    }
}
