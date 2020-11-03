<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory as ValidationFactory;

class EmailRequest extends FormRequest
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
            'email' => 'required|email|exists:App\User,email',
        ];

      

    }

    public function messages()
    {
        return [
            'email.required' =>"خانة الايميل فارغة",
            'email.email'=>"الرجاء كتابة إيميل صحيح",
            'email.exists'=>"هذا الايميل غير مسجل",
        ];
    }
}
