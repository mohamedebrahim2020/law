<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="images/favicon.png" rel="icon" />
    <title> Smart Loyer | المحامي الذكي</title>
    <meta name="description" content="">
    <meta name="author" content="ittezan.com">

    <!--RTL Files-->
    <link href="css/plugins/bootstrap-rtl/css/bootstrap-rtl.min.css" rel="stylesheet" />
    <link href="css/plugins/bootstrap-rtl/css/bootstrap-responsive-rtl.min.css" rel="stylesheet" />

    <!--Main Stylesheet-->
    <link href="css/style.css" rel="stylesheet" />

    <!--Font Awesome-->
    <link href="css/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!--Plugins-->
    <link href="css/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />

</head>

<body class="fixed-top">

    <!--HEADER START=========================================-->
    <div id="header" class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">

                <a class="brand" class="center" href="dashboard.html" style="text-align: center;">
                    <img class="logo" src="img/logo.png" alt="Logo" style="margin-top: -10px; margin-bottom: -10px; padding-left: 2px !important;" />
                </a>

                <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="arrow"></span>
                </a>

                <div id="top_menu" class="nav notify-row span4">
                    <ul class="nav top-menu">

                        <li class="dropdown">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="إعدادات النظام">
                                <i class="icon-cog"></i>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                <i class="icon-bell-alt"></i>
                                <span class="badge badge-warning">1</span>
                            </a>

                            <ul class="dropdown-menu extended notification">
                                <li>
                                    <p>لديك 0 إشعارات جديدة</p>
                                </li>
                                <li> <a href="">جميع الإشعارات</a> </li>
                            </ul>

                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-envelope-alt"></i>
                                <span class="badge badge-important">1</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <li>
                                    <p>لديك 0 رسائل جديدة</p>
                                </li>
                                <li> <a href="">جميع الرسائل</a> </li>
                            </ul>
                        </li>

                    </ul>
                </div>

                <div class="notify-row span3">
                    <div class="stopwatch">
                        <div class="circle">
                            <div> <span class="time" id="display">00:00:00</span></div>
                            <button class="buttonPlay">
                                <img id="playButton" src="img/play.png" />
                                <img id="pauseButton" src="img/pause.png" />
                            </button>
                        </div>
                    </div>
                </div>


                <div class="top-nav">
                    <ul class="nav pull-left top-menu">

                        <li class="dropdown mtop5">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="غرفة المحادثة">
                                <i class="icon-comments-alt"></i>
                            </a>
                        </li>

                        <li class="dropdown mtop5">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="تعليمات">
                                <i class="icon-question-sign"></i>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="img/profile-pic.png" alt="" style="border-radius: 33px;">
                                <span class="username">عبدالرحمن الوطبان </span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href=""><i class="icon-user"></i>&nbsp;الملف الشخصي</a></li>
                                <li><a href=""><i class="icon-tasks"></i>&nbsp;المهام&nbsp; </a></li>
                                <li><a href=""><i class="icon-key"></i>&nbsp;تغيير كلمة المرور</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html"><i class="icon-off"></i>&nbsp;تسجيل الخروج </a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--HEADER END=========================================-->

    <div id="container" class="row-fluid">

        <!--SIDE BAR START=========================================-->
        <div id="sidebar" class="nav-collapse collapse">

            <div class="sidebar-toggler hidden-phone"></div>

            <ul class="sidebar-menu">
                <li class="has-sub">
                    <a href="dashboard.blade.html" class="">
                        <span class="icon-box"><i class="icon-dashboard"></i></span>اللوحة الرئيسة
                    </a>
                </li>
                <li class="has-sub">
                    <a href="javascript:void(0);" class="">
                        <span class="icon-box"><i class="icon-th"></i></span>ادارة المهام
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="">قائمة المشاريع </a></li>
                        <li><a href="">المهام غير المنجزة</a></li>
                        <li><a href="">المهام المنجزة</a></li>
                        <li><a href="">جلسات بالانتظار</a></li>
                        <li><a href="">جلسات سابقة</a></li>
                        <li><a href="">سجل الاجراءات</a></li>
                        <li><a href="">قضايا التنفيذ</a></li>
                        <li><a href="">التقويم</a></li>
                        <li><a href="">سجل العملاء </a></li>
                        <li><a href="">سجل الخصوم</a></li>
                        <li><a href="">نقاط الموظفين</a></li>
                        <li><a href="">متجر الحوافز</a></li>
                        <li><a href="">مركز البحث</a></li>
                        <li><a href="">مراسلات العملاء </a></li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a href="javascript:void(0);" class="">
                        <span class="icon-box"><i class="icon-money"></i></span>الفواتير
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="">الفواتير </a></li>
                        <li><a href="">عروض السعر </a></li>
                        <li><a href="">الاصناف </a></li>
                        <li><a href="">تنسيق الصفحة</a></li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a href="javascript:void(0);" class="">
                        <span class="icon-box"><i class="icon-hdd"></i></span>ارشيف المكتب
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="">اقسام الارشيف </a></li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a href="javascript:void(0);" class="">
                        <span class="icon-box"><i class="icon-calendar"></i></span>المواعيد
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="">مواعيد في الانتظار </a></li>

                    </ul>
                </li>

                <li class="has-sub">
                    <a href="javascript:void(0);" class="">
                        <span class="icon-box"><i class="icon-retweet"></i></span>الاستعارات
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="">تسجيل الوثائق </a></li>
                        <li><a class="" href="">طلبات الاستعارة </a></li>

                    </ul>
                </li>

                <li class="has-sub">
                    <a href="javascript:void(0);" class="">
                        <span class="icon-box"><i class="icon-book"></i></span>المكتبة القانونية
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" target="_blank" href="">البحث </a></li>

                    </ul>
                </li>

                <li class="has-sub">
                    <a href="javascript:void(0);" class="">
                        <span class="icon-box"><i class="icon-building"></i></span>الشؤون الإدارية
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="">سجل الموظفين</a></li>
                        <li><a class="" href="">سجل طلبات الصرف</a></li>
                        <li><a class="" href="">سجل الاجازات</a></li>
                        <li><a class="" href="">سجل الأذونات</a></li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a href="javascript:void(0);" class="">
                        <span class="icon-box"><i class="icon-money"></i></span>الشؤون المالية
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">

                        <li><a class="" href="">تسجيل القيود المحاسبية</a></li>
                        <li><a class="" href="">دليل الحسابات</a></li>
                        <li><a class="" href="">الفترات المالية</a></li>
                        <li><a class="" href="">مستخدمين الفترات</a></li>
                        <li><a class="" href="">الفترة الافتراضية</a></li>
                        <li><a class="" href="">الحسابات الافتراضية</a></li>
                        <li><a class="" href="">ميزان المراجعة</a></li>


                        <li><a class="" href="">كشف حساب </a></li>
                        <li><a class="" href="">سندات قيد يومية</a></li>

                        <li><a class="" href="">تقرير الميزانية</a></li>
                        <li><a class="" href="">الارباح والخسائر</a></li>

                    </ul>
                </li>

                <li class="has-sub">
                    <a href="javascript:void(0);" class="">
                        <span class="icon-box"><i class="icon-envelope-alt"></i></span>المعاملات
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="">سجل الصادر </a></li>
                        <li><a class="" href="">سجل الوارد </a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:void(0);" class="">
                        <span class="icon-box"><i class="icon-bookmark"></i></span>الصلاحيات
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="ui-icon-person" href="userList.blade.html">قائمة المستخدمين</a></li>
                        <li><a class="ui-icon-person" href="usersGroups.blade.html">مجموعات المستخدمين</a></li>
                        <li><a class="ui-icon-person" href="privilegesPagesUsers.blade.html">صـلاحيات المجموعات</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:void(0);" class="">
                        <span class="icon-box"><i class="icon-cogs"></i></span>الاعدادات
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="ui-icon-notice" href="">البيانات الاساسية</a></li>
                        <li><a class="ui-icon-notice" href="">اعدادات النظام</a></li>
                        <li><a class="ui-icon-notice" href="">نقاط المهام</a></li>
                        <li><a class="ui-icon-person" href="">رسائل التنبيهات</a></li>

                        <li><a href="">سجل الاحداث</a></li>
                        <li><a href="">النسخ الاحتياطي</a></li>
                        <li><a href="">الدعم الفني</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <!--SIDE BAR END=========================================-->

        <!--PAGE CONTENT START============================================================================-->
        <div id="main-content">
            <div class="container-fluid">
                <div class="row-fluid">

                    <div class="span12">
                        <div>
                            <h3 class="page-title">تغيير كلمة المرور </h3>
                            <ul class="breadcrumb">
                                <li>
                                    <a href="dashboard.blade.html"><i class="icon-home"></i></a>
                                    <span class="divider">&nbsp;</span>
                                </li>
                                <li>
                                    <a href="#">تغيير كلمة المرور </a> <span class="divider">&nbsp;</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div id="page">
                        <div class="row-fluid">
                            <div class="widget space-vert-15">

                                <div class="widget-title">
                                    <h4>&nbsp;تغيير كلمة المرور</h4>
                                </div>

                                <div class="widget-body form">
                                    <div class="form-horizontal">

                                        <div class="control-group">
                                            <label class="control-label">كلمة المرور السابقة<span class="required">*</span></label>
                                            <div class="controls">
                                                <input type="password" class="span6" />
                                                <br />
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">كلمة المرور الجديدة<span class="required">*</span></label>
                                            <div class="controls">
                                                <input type="password" class="span6" />
                                                <br />
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">تأكيد كلمة المرور<span class="required">*</span></label>
                                            <div class="controls">
                                                <input type="password" class="span6" />
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <div class="btn-group">
                                                <a class="btn b-w-m btn-primary" href=""><span class="icon-ok icon-white"></span>&nbsp;حـفــظ</a>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-warning" href=""><span class="icon-ban-circle icon-white"></span>&nbsp;إلغاء</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--PAGE CONTENT END============================================================================-->

        </div>
    </div>

    <div id="footer">
        © 2020 <a href="index.html">ITTEZAN.COM</a> — <span class="lang" key="All rights reserved">جميع الحقوق محفوظة</span>
    </div>

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="css/plugins/bootstrap-rtl/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        jQuery(document).ready(function() {
            // initiate layout and plugins 
            Lunch.init();
        });

        // Convert time to a format of hours, minutes, seconds, and milliseconds

        function timeToString(time) {
            let diffInHrs = time / 3600000;
            let hh = Math.floor(diffInHrs);

            let diffInMin = (diffInHrs - hh) * 60;
            let mm = Math.floor(diffInMin);

            let diffInSec = (diffInMin - mm) * 60;
            let ss = Math.floor(diffInSec);

            let diffInMs = (diffInSec - ss) * 100;
            let ms = Math.floor(diffInMs);

            let formattedMM = mm.toString().padStart(2, "0");
            let formattedSS = ss.toString().padStart(2, "0");
            let formattedMS = ms.toString().padStart(2, "0");

            return `${formattedMM}:${formattedSS}:${formattedMS}`;
        }

        // Declare variables to use in our functions below

        let startTime;
        let elapsedTime = 0;
        let timerInterval;

        // Create function to modify innerHTML

        function print(txt) {
            document.getElementById("display").innerHTML = txt;
        }

        // Create "start", "pause" and "reset" functions

        function start() {
            startTime = Date.now() - elapsedTime;
            timerInterval = setInterval(function printTime() {
                elapsedTime = Date.now() - startTime;
                print(timeToString(elapsedTime));
            }, 10);
            showButton("PAUSE");
        }

        function pause() {
            clearInterval(timerInterval);
            showButton("PLAY");
        }

        function reset() {
            clearInterval(timerInterval);
            print("00:00:00");
            elapsedTime = 0;
            showButton("PLAY");
        }

        // Create function to display buttons

        function showButton(buttonKey) {
            const buttonToShow = buttonKey === "PLAY" ? playButton : pauseButton;
            const buttonToHide = buttonKey === "PLAY" ? pauseButton : playButton;
            buttonToShow.style.display = "block";
            buttonToHide.style.display = "none";
        }
        // Create event listeners

        let playButton = document.getElementById("playButton");
        let pauseButton = document.getElementById("pauseButton");
        let resetButton = document.getElementById("resetButton");

        playButton.addEventListener("click", start);
        pauseButton.addEventListener("click", pause);
        resetButton.addEventListener("click", reset);

    </script>
</body>

</html>
