<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\GroupAddRequest;
use App\Http\Requests\StoreUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    use Notifiable;
    public function get_employees_groups(){
        $employees = Employee::whereDoesntHave('user')->get(['id','name']);
        $roles = Role::get(['id','name']);
        if (request()->is('api*')) {
            return response()->json(['employees'=>$employees,'roles'=>$roles]);
        }    
       return view('layouts.permissions.createUser',['employees'=>$employees,'roles'=>$roles]);
    }

    public function storeUser(StoreUserRequest $request){
     
        $employee = Employee::find($request->employee_id);
        $user = User::create([
            'user_name' => $request->user_name,
            'employee_id' => $employee->id,
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
        // dd($users);
        if (request()->is('api*')) {
          return response()->json(['users'=>$users]);
        } else {
          return view('layouts.permissions.usersMenu',['users'=>$users]);
    }
    }

    public function get_groups_table(){
        $groups = Role::all();
        return view('layouts.permissions.usersGroups',['groups'=>$groups]);
    }

    public function get_groups(){
        return view('layouts.permissions.groupAdd');
    }

    public function storeGroup(GroupAddRequest $request){
       // dd($request);
      if ($request->active == "on") {
        $role = Role::create([
            'name' => $request->role,
            'description' => $request->description,
            'Active' => 'yes',
        ]);
      } else {
        $role = Role::create([
            'name' => $request->role,
            'description' => $request->description,
            'Active' => 'no',
            
        ]);
      }
      if (request()->is('api*')) {
         return response()->json(["role"=>$role,"message"=>"تم إضافة المجموعة بنجاح"],200);
      } else {
        return redirect('permission/groupsMenu');
      }
      
    }

    // API's

    public function employees_notUser(){
        $employees = Employee::whereDoesntHave('user')->get();
        return response()->json($employees,200);
    }

    public function employees_areUser(){
        $employees = Employee::has('user')->get();
        return response()->json($employees,200);
    }

    public function allUsers(){
        $Users = User::with('employee')->with('roles')->get();
        $usersRoles = [];
        foreach($Users as $user){
            $roles= $user->roles;
            if (count($roles) == 0 ) {
                $role = "بدون مجموعه";
            } else {
            $roles= $roles->pluck('name');
            $role = $roles[0];
        }
            $usersRoles += ["$user->id"=> [$user->user_name,$user->employee->name,$role]];
        }
        return response()->json($usersRoles,200); 
    }

    public function allEmployees(){
        $employees = Employee::all();
        return response()->json($employees,200);
    }

    public function allRoles(){
        $roles = Role::all();
        return response()->json($roles,200);
    }

    public function get_users_role(){
        $users = User::with('roles')->get();
        //return response()->json($user1->roles);
        $usersRoles = [];
        foreach($users as $user){
            $roles= $user->roles;
            if (count($roles) == 0 ) {
                $role = "بدون مجموعه";
            } else {
            $roles= $roles->pluck('name');
            $role = $roles[0];
        }
            $usersRoles += ["$user->id"=> [$user->employee->name,$role]];
        }
        return response()->json($usersRoles);
    }

    public function destroyUser($id){
        $user = User::find($id);
        return response()->json($user);
        if ($user == null) {
           return response()->json(["message"=>"هذا المستخدم غير موجودة "],500);
        } else {  
        $deleteduser = $user->delete();
        return response()->json(["deleteduser"=>$user,"message"=>"تم حذف المستخدم بنجاح"],200);
       } 
    }

    public function destroyRole($id){
     $role = Role::find($id);
     if ($role == null) {
        return response()->json(["message"=>"هذة المجموعة غير موجودة "],500);
     } else {  
     $deletedRole = $role->delete();
     return response()->json(["deletedRole"=>$role,"message"=>"تم حذف المجموعة بنجاح"],200);
    }  
    }

    public function updateUser(Request $request){
      //dd($request->employee);
      $employee =$request->employee;
      foreach($employee as $employee =>$one){
        $employee_id = $one;
      }

      $role = $request->role;
      foreach($role as $role =>$one){
        $role_id = $one;
    }
      $user = User::find($request->id);
      $user->roles()->detach();
      $user->user_name = $request->user_name;
      $user->email = $request->email;
      $user->employee_id = $employee_id;
      $user->password = $request->password;
      $user->assignRole($role_id);
      $user->save();


      return response()->json(['user'=>$user,'message'=>'لقد تم تعديل البيانات بنجاح']);
    

    }

    public function updateRole(Request $request){
        $role=Role::find($request->id);
        $role->name =$request->name;
        $role->description=$request->description;
        $role->Active = $request->Active;
        $role->save();

        return response()->json(['role'=>$role,'message'=>'لقد تم تعديل البيانات بنجاح']);

    }
}
