<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\Http\Requests\otpRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Notifications\PasswordResetRequest;
use App\Notifications\PasswordResetSuccess;
use App\User;
use App\PasswordReset;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PasswordResetController extends Controller
{
    public function showCodeRequestForm(){
        return view('auth.emailResetPassword');
    }
    /**
     * Create token password reset
     *
     * @param  [string] email
     * @return [string] message
     */
    public function create(EmailRequest $request)
    {
      
         $user = User::where('email', $request->email)->first();
        // if (!$user)
        // if( $request->is('api/*') || $request->wantsJson()){
        //     return response()->json([
        //         'message' => "لا يوجد مستخدم بهذا البريد الإلكتروني"
        //     ], 404);
        // }     
        $passwordReset = PasswordReset::updateOrCreate(
            ['email' => $user->email],
            [
                'email' => $user->email,
                'token' => Str::random(60),
                'otp_token'=> Str::random(6),
                'updated_at'=> now(),
            ]
        );
        if ($user && $passwordReset){
            $user->notify(new PasswordResetRequest($passwordReset->otp_token));
            if( $request->is('api/*') || $request->wantsJson()){    
                return response()->json([
                    'message' => 'تم إرسال رمز التتبع علي الايميل',
                    
                ]);
            } else {
                    return redirect('/invalid/code')->with('message','تم إرسال رمز التتبع علي الايميل');
                }
            }
    }
    /**
     * Find token password reset
     *
     
     * @return [string] message
     * @return [json] passwordReset object
     */
    public function find(otpRequest $request)
    {
        $passwordReset = PasswordReset::where('otp_token', $request->otp_code)
            ->first();
          
        if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();
            if( $request->is('api/*') || $request->wantsJson()){    
            return response()->json([
                'message' => 'رمز التحقق غير صحيح'
            ], 404);
        } else {
            return Redirect::back()->with('message','رمز التحقق غير صحيح');
        } 
        }
        if( $request->is('api/*') || $request->wantsJson()){ 
        return response()->json(["token"=>$passwordReset->token,"message"=>"تم إدخال رمز التحقق بنجاح"]);
        } else{
            return view('auth.resetPassword')->with('token',$passwordReset->token);
        }
    }
     
    public function set(Request $request)
    {
       
        $passwordReset = PasswordReset::where([
            ['email', $request->email]
        ])->first();
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            if( $request->is('api/*')){
              return response()->json(['userMessage' => 'لا يوجد مسنخدم بهذا الإيميل']);
            } else {
            return redirect()->to('/invalid/password')->with('userMessage','لا يوجد مسنخدم بهذا الإيميل');
        }
        } elseif (! $passwordReset) {
            if( $request->is('api/*')){
                return response()->json(['passwordMessage' => 'هذا المستخدم لم يطلب تغيير كلمة المرور']);
              } else {
            return redirect()->to('/invalid/password')->with('passwordMessage','هذا المستخدم لم يطلب تغيير كلمة المرور');
        }
        } else{  
        $user->password = $request->password;//bcrypt($request->password);
        $user->save();
        $passwordReset->delete();
        $user->notify(new PasswordResetSuccess($passwordReset));
        return response()->json(["user"=>$user,"message"=>"تم تعديل الرقم السري بنجاح"]);
    }

    }
}