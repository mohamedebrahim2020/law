<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
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
        $this->redirect = url()->current();
        return [
            'email' =>  'required|email|exists:App\User,email',
            'password' => 'required',
           
        ];
    }

    public function messages()
    {
        return [
            'email.required' =>"خانة الايميل فارغة",
            'email.email'=>"الرجاء كتابة إيميل صحيح",
            'email.exists'=>"هذا الايميل غير مسجل",
            'password.required' => "خانة الرقم السري فارغة",
            
            
        ];
    }
   

  
}
