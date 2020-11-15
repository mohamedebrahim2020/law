<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'employee_id' => 'required|exists:App\Employee,id',
            'role' => 'required|exists:roles,id',
            'user_name' => 'required|unique:users,user_name',
            'password' => 'required|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'employee.required' =>"الرجاء اختيار اسم الموظف",
            'employee.exists'=>"الموظف غير موجود",
            'role.required'=>"الرجاء اختيار اسم المجموعة",
            'role.exists'=>"المجموعة غير موجودة",
            'user_name.required'=>"الرجاء اختيار اسم المستخدم",
            'user_name.unique'=>"هذا الاسم مستخدم بالفعل",
            'password.required'=>"الرجاء اختيار الرقم السري ",
            'password.confirmed'=>"الرجاءتأكيد الرقم السري ",
        ];
    }

   
 


}
