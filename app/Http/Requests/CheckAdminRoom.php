<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CheckAdminRoom extends Request
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
            //
          'nameroom.required' => 'Hãy nhập mã phòng khám của bạn',
          
        ];
    }
    public function rules()
    {
        return [
            //
          'nameroom' => 'required',
         
        ];
    }
}
