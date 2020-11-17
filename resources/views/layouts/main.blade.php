@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <h3 class="page-title">
                اللوحة الرئيسة
                <small>ملخص العمليات</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                </li>
                <li>
                    <a href="#">اللوحة الرئيسة</a> <span class="divider">&nbsp;</span>
                </li>
                <li class="pull-right search-wrap">
                    <div class="btn-group">
                    <button class="btn btn-primary" type="button">
                        <span class="icon-plus white-color"></span> اضافة اعلان
                    </button>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="dashboard">

        <div class="alert alert-info">
            <button data-dismiss="alert" class="close">×</button>
            !لديك إشعار جديد
        </div>

        <div class="square-state">

            <div>
                <div class="row-fluid">

                    <a href="" class="icon-btn span2">
                        <i class="icon-book"></i>
                        <div>المشاريع</div>
                        <span class="badge badge-info"><strong>3</strong></span>
                    </a>

                    <a href="" class="icon-btn span2">
                        <i class="icon-tasks"></i>
                        <div>المهام غير المنجزة </div>
                        <span class="badge badge-important"><strong>11</strong></span>
                    </a>

                    <a href="" class="icon-btn span2">
                        <i class="icon-check"></i>
                        <div>المهام المنجزة</div>
                        <span class="badge badge-success"><strong>1</strong></span>
                    </a>

                    <a href="" class="icon-btn span2">
                        <i class="icon-legal"></i>
                        <div>جلسات بالانتظار</div>
                        <span class="badge badge-warning"><strong>1</strong></span>
                    </a>

                    <a href="" class="icon-btn span2">
                        <i class="icon-folder-close"></i>
                        <div>جلسات سابقة</div>
                        <span class="badge  badge-inverse"><strong>6</strong></span>
                    </a>

                    <a href="" class="icon-btn span2">
                        <i class="icon-calendar"></i>
                        <div>التقويم</div>
                    </a>


                    <a href="" class="icon-btn span2">
                        <i class="icon-money"></i>
                        <div>الفواتير</div>
                        <span class="badge badge-warning"><strong>6</strong></span>
                    </a>


                    <a href="" class="icon-btn span2">
                        <i class="icon-retweet"></i>
                        <div>الاجراءات</div>
                        <span style="font-family: 'cairo'; font-weight: 700;" class="badge badge-success">جديد</span>
                    </a>

                    <a href="" class="icon-btn span2">
                        <i class="icon-list"></i>
                        <div>المواعيد</div>
                        <span class="badge badge-important"><strong>0</strong></span>
                    </a>

                    <a href="" class="icon-btn span2">
                        <i class="icon-money"></i>
                        <div>طلبات الصرف</div>
                        <span class="badge badge-info">
                            <span><strong>1</strong></span></span>
                    </a>

                    <a href="" class="icon-btn span2">
                        <i class="icon-plane"></i>
                        <div>طلبات الإجازات</div>
                        <span class="badge badge-warning"><strong>0</strong></span>
                    </a>


                    <a href="" class="icon-btn span2">
                        <i class="icon-time"></i>
                        <div>اذونات الخروج</div>
                        <span class="badge badge-important"><strong>0</strong></span>
                    </a>

                    <a href="" class="icon-btn span2">
                        <i class="icon-bar-chart"></i>
                        <div>الاحصائيات</div>
                    </a>


                    <a href="" class="icon-btn span2">
                        <i class="icon-search"></i>
                        <div>مركز البحث</div>
                    </a>

                    <a href="" class="icon-btn span2">
                        <i class=" icon-cog"></i>
                        <div>الاعدادات </div>
                    </a>

                    <a href="" class="icon-btn span2">
                        <i class=" icon-envelope"></i>
                        <div>الدعم الفني</div>
                    </a>

                    <a href="" class="icon-btn span2">
                        <i class="icon-exclamation-sign"></i>
                        <div>شرح البرنامج</div>

                    </a>


                    <a href="" class="icon-btn span2">
                        <i class="icon-list-alt"></i>
                        <div>التقارير </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    

    