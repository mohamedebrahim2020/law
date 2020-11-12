<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\StoreUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    use Notifiable;
    public function routeNotificationForMail($notification)
    {
        // Return email address only...
        return $this->email_address;

        // Return name and email address...
       // return [$this->email_address => $this->name];
    }
    public function get_employees_groups(){
        $employees = Employee::whereDoesntHave('user')->get(['id','name']);
        $roles = Role::get(['id','name']);
        if (request()->is('api*')) {
            return response()->json(['employees'=>$employees,'roles'=>$roles]);
        }    
       return view('layouts.permissions.createUser',['employees'=>$employees,'roles'=>$roles]);
    }

    public function storeUser(StoreUserRequest $request){
     
        $employee = Employee::find($request->employee);
        $user = User::create([
            'user_name' => $request->user_name,
            'employee_id' => $request->employee,
            'email' => $employee->email,
            'password' => $request->password,
        ]);
        $user->assignRole([$request->role]);
        if (request()->is('api*')) {
            return response()->json(["user"=>$user,"message"=>"تم إدخال المستخدم بنجاح"]);
        }
        redirect()->to('permission/usersMenu');
    }

    public function get_users_table(){
        
        $users = User::with('employee')->with('roles')->get();
        if (request()->is('api*')) {
          return response()->json(['users'=>$users]);
        } else {
          return view('layouts.permissions.usersMenu',['users'=>$users]);
    }
    }
}
