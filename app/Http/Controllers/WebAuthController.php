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
                    return view('layouts.main',['user'=>$user]);
                } else {
                    return redirect('/login/page')->with(
                        'user_message', 'أسم المستخدم او كلمة المرور غير صحيحة');
                }
            } else {
                return redirect('/login/page')->with(
                    'user_message', 'أسم المستخدم او كلمة المرور غير صحيحة');
            }
        }

        public function logout(Request $request){
           // dd($request);
           // $token = $request->user()->token();
            //$token->revoke();
            return redirect('/login/page');
        

        }

        
//Hash::check($request->password, $user->password)
    
    }

