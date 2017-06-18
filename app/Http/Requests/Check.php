<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Check extends Request
{
	
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function messages(){
        return [
                   'nameroom.required' => 'Hãy nhập mã phòng khám của bạn',

        ];
    }
    public function authorize()
    {
        return true;
    }
     public function rules()
    {
    	 return [
            'nameroom' => 'required'
        
          

        ];
      
    }
}
