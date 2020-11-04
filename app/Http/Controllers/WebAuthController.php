<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WebAuthController extends Controller
{
    public $successStatus = 200;
    /** 
     * login web 
     * 
     * @return \Illuminate\Http\Response 
     */
   
        public function login (Request $request) {
            $validator = Validator::make($request->all(), [
                'user_name' => 'required',
                'password' => 'required',
            ]);
            if ($validator->fails())
            {
                return response(['errors'=>$validator->errors()->all()], 422);
            }
            $user = User::where('user_name', $request->user_name)->first();
            if ($user) {
                if ($request->password == $user->password) {
                    $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                    $response = ['token' => $token];
                    return response($response, 200);
                } else {
                    return redirect('/login/page')->with(
                        'password_message', 'خطأ!.. كلمة المرور غير صحيحة');
                }
            } else {
                return redirect('/login/page')->with(
                    'user_message', 'المستخدم غير موجود');
            }
        }
//Hash::check($request->password, $user->password)
    
    }

