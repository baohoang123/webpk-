<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CheckEditUserInfo extends Request
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
  

    
       // 'password_confirmation.same' => 'Mật khẩu không khớp',
       
        
    ];
}
    public function rules()
    {
        return [
            //
          // 'password' => 'alpha_num',
          // 'password_confirmation' => 'require|alpha_num|same:password'
        ];
    }
}
