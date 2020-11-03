<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class otpRequest extends FormRequest
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
            
                'otp_code' => 'required|size:6|exists:App\PasswordReset,otp_token',
        
        ];
    }

    public function messages()
    {
        return [
            'otp_code.required' =>"خانة رمز التحقق فارغة",
            'otp_code.size'=>"رمز التحقق مكون من ست رموز",
            'otp_code.exists'=>"رمز التحقق غير صحيح",
            
        ];
    }
}
