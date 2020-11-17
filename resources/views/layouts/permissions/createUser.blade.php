@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row-fluid">

        <div class="span12">
            <div>
                <h3 class="page-title">المستخدمين
                    <small>قائمة مستخدمي النظام</small>
                </h3>
                <ul class="breadcrumb">
                    <li>
                        <a href="dashboard.blade.html"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                    </li>
                    <li>
                        <a href="#">الصلاحيات</a> <span class="divider">&nbsp;</span>
                    </li>
                    <li><a href="userList.blade.html">المستخدمين</a><span class="divider">&nbsp;</span></li>

                    <li><a href="userAdd.html">مستخدم جديد</a><span class="divider">&nbsp;</span></li>
                </ul>
            </div>
        </div>

        <div id="page">
            <div class="row-fluid">
                <div class="widget space-vert-15">

                    <div class="widget-title">
                        <h4>&nbsp;مستخدم جديد</h4>
                    </div>
                    <form id="adduser" method="POST" action="/permission/store" >
                        @csrf
                    <div class="widget-body form">
                        <div class="form-horizontal">

                            <div class="control-group">
                                <label class="control-label">اختيار الموظف<span class="required">*</span></label>
                                <div class="controls">
                                    <select name="employee" class="span6">
                                        <option  value="">--اختر--</option>
                                        @foreach($employees   as $employee)
                                        @if (old('employee') == $employee->id)
                                        <option  value="{{$employee->id}}" selected="selected">{{$employee->name}}</option>
                                        @else
                                        <option  value="{{$employee->id}}">{{$employee->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    <div>
                                    @error('employee')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">اختيار المجموعة<span class="required">*</span></label>
                                <div class="controls">
                                    <select name="role" class="span6">
                                        <option  value="">--اختر--</option>
                                        @foreach($roles   as $role)
                                        @if (old('role') == $role->id)
                                        <option  value="{{$role->id}}" selected="selected" >{{$role->name}}</option>
                                        @else
                                        <option  value="{{$role->id}}"  >{{$role->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">اسم الدخول<span class="required">*</span></label>
                                <div class="controls">
                                    <input type="text" name="user_name" value="{{  old('user_name') }}" class="span6" autocomplete="Off" />
                                </div>
                                <div>
                                    @error('user_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">كلمة المرور<span class="required">*</span></label>
                                <div class="controls">
                                    <input type="password" name="password" class="span6" />
                                    <br/> 
                                </div>
                                <div>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">تأكيد كلمة المرور<span class="required">*</span></label>
                                <div class="controls">
                                    <input type="password" name="password_confirmation" class="span6" />
                                </div>
                            </div>

                            <div class="form-actions">
                                <div class="btn-group">
                                    {{-- <a class="btn b-w-m btn-primary" href=""><span class="icon-ok icon-white"></span>&nbsp;حـفــظ</a> --}}
                                    <button class="btn btn-primary btn-block shadow-none my-4" type="submit">&nbsp;حـفــظ</button>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-warning" href=""><span class="icon-ban-circle icon-white"></span>&nbsp;خـروج</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 