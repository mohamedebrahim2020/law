<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public $successStatus = 200;
    /** 
     * login api 
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
                    $response = ["message" => "Password mismatch"];
                    return response($response, 422);
                }
            } else {
                $response = ["message" =>'User does not exist'];
                return response($response, 422);
            }
        }
//Hash::check($request->password, $user->password)
    
    }

    // MAIL_MAILER=smtp
    // MAIL_HOST=smtp.mailtrap.io
    // MAIL_PORT=2525
    // MAIL_USERNAME=null
    // MAIL_PASSWORD=null
    // MAIL_ENCRYPTION=null
    // MAIL_FROM_ADDRESS=null
    // MAIL_FROM_NAME="${APP_NAME}"
