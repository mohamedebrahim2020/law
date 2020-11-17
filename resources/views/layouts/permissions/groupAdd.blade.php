@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <h3 class="page-title">مجموعات المستخدمين
                    <small>مجموعات النظام </small>
                </h3>
                <ul class="breadcrumb">
                    <li>
                        <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                    </li>
                    <li>
                        <a href="#"> الصلاحيات</a> <span class="divider">&nbsp;</span>
                    </li>
                    <li>
                        <a href="usersGroups.blade.html">مجموعات المستخدمين</a> <span class="divider">&nbsp;</span>
                    </li>
                    <li>
                        <a href="groupAdd.blade.html">اضافة مجموعة</a> <span class="divider">&nbsp;</span>
                    </li>
                </ul>
            </div>
        </div>

        <div id="page">
            <div class="row-fluid">  
                <div class="widget space-vert-15">
                    
                        <div class="widget-title">
                            <h4>&nbsp;اضافة مجموعة  </h4>
                        </div>
                        <form id="" method="POST" action="/permission/create/group" >
                            @csrf
                    <div class="widget-body form">
                        <div class="form-horizontal">

                            <div class="control-group">
                                <label class="control-label">اسم المجموعة</label>
                                <div class="controls">
                                    <input type="text" name="role" class="span6" />
                                </div>
                                <div>
                                    @error('role')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">وصف المجموعة</label>
                                <div class="controls">
                                    <input type="text" name="description" class="span6" />
                                </div>
                                <div>
                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label"></label>
                                <div class="controls">
                                    <span class="checkbox span6"><input type="checkbox" name="active" /><label for="1">نــشـط</label></span>
                                </div>
                            </div>

                            <div class="form-actions">
                                    <div class="btn-group">
                                        <button class="btn btn-primary btn-block shadow-none my-4" type="submit">&nbsp;حـفــظ</button>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-warning" href=""><span class="icon-ban-circle icon-white"></span>&nbsp;الغاء</a>
                                    </div>
                            </div>

                        </div>
                    </div>
                    </form>

                </div>

            </div>
        </div>

    </div>
            
@endsection