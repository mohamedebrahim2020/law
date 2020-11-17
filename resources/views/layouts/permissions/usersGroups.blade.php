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
                </ul>
            </div>
        </div>

        <div id="page">
            <div class="row-fluid">
                <div class="btn-group">
                    <a class="btn btn-primary" href="/permission/createGroup"><span class="icon-plus"></span>&nbsp; اضافة مجموعة</a>
                </div>

                <div class="widget space-vert-15">

                    <div class="widget-title">
                        <h4>&nbsp;المجموعات</h4>
                    </div>

                    <div class="widget-body">
                        <div>
                            <table class="table table-striped table-bordered table-hover" cellspacing="0" rules="all" border="1" style="border-collapse:collapse;">
                                <tr>
                                    <th scope="col" style="width:40px;"></th>
                                    <th scope="col">المجموعة</th>
                                    <th scope="col">الوصف</th>
                                    <th scope="col" style="width:40px;">
                                        <center>الحالة</center>
                                    </th>
                                    <th scope="col" style="width:40px;">
                                        <center>تعديل</center>
                                    </th>
                                    <th scope="col" style="width:40px;">
                                        <center>حذف</center>
                                    </th>
                                </tr>
                                @foreach ($groups as $group)
                                <tr>
                                    <td>
                                        <center>{{$group->id}}</center>
                                    </td>
                                    <td>
                                        {{$group->name}}
                                    </td>
                                    <td>{{$group->description}}</td>
                                @if($group->Active == "yes")    
                                    <td>
                                        <center>
                                            <input type="checkbox" checked="checked" title="الحالة" />
                                            <i class="fa fa-check"></i>
                                        </center>
                                    </td>
                                @else
                                <td>
                                    <center>
                                        <input type="checkbox"  title="الحالة" />
                                        <i class="fa fa-check"></i>
                                    </center>
                                </td> 
                                @endif   
                                    <td>
                                        <center>
                                            <input type="image" title="تعديل" src="{{asset('img/edit.png')}}" />
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="image" title="حذف" src="{{asset('img/trash.png')}}" />
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
@endsection