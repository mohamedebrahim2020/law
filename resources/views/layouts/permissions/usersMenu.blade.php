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
                    </ul>
                </div>
            </div>

            <div id="page">
                <div class="row-fluid">
                    <div class="btn-group">
                        <a class="btn btn-primary" href="/permission/createUser"><span class="icon-plus"></span>&nbsp; اضافة مستخدم</a>
                    </div>

                    <div class="widget space-vert-15">

                        <div class="widget-title">
                            <h4>&nbsp;المستخدمين</h4>
                        </div>

                        <div class="widget-body">
                            <div>
                                <table class="table table-striped table-bordered table-hover" cellspacing="0" rules="all" border="1" style="border-collapse:collapse;">
                                    <tr>
                                        <th scope="col" style="width:40px;"></th>
                                        <th scope="col">اسم الموظف</th>
                                        <th scope="col">مجموعة المستخدمين</th>
                                        <th scope="col" style="width:40px;">
                                            <center>تعديل</center>
                                        </th>
                                    </tr>
                                    @foreach ($users as $employee)
                                    <tr>
                                        <td>
                                            <center>1</center>
                                        </td>
                                        <td>
                                            <img src="{{asset('img/emp.png')}}" alig />
                                            {{$employee->employee->name}}
                                        </td>
                                        <td>{{$employee->roles->pluck('name')}}</td>
                                        <td>
                                            <center>
                                                <input type="image" title="تعديل" src="{{asset('img/edit.png')}}" />
                                            </center>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection