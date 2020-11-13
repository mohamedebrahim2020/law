<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupAddRequest extends FormRequest
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
            'role' => 'required|unique:roles,name',
            'description' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'role.required' =>"الرجاء اختيار اسم المجموعة",
            'role.unique'=>"هذا الاسم مستخدم بالفعل",
            'description.required'=>"الرجاء كتابة الوصف",
          
        ];
    }
}
