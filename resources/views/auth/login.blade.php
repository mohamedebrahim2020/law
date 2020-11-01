<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="images/favicon.png" rel="icon" />
    <title> Smart Loyer | المحامي الذكي</title>
    <meta name="description" content="">
    <meta name="author" content="ittezan.com">

    <!-- Stylesheet
============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('js/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="main-wrapper" class="h-100 login-body">
        <div class="container h-100">
            <!-- Login Form
    ============================================= -->
            <div class="row no-gutters h-100">
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 m-auto py-5">
                    <div class="logo text-center">
                        <a href="login.html" title="Smart Loyar">
                            <img class="logo-sm" src="{{ asset('img/logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <p class="lead text-center mb-4">تسجيل دخول</p>

                    <!-- <p class="lead text-center alert alert-danger">خطأ!.. رمز التحقق غير صحيح!!</p>-->
                    @if(session('message'))
                    <div class="lead text-center alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif

                    <form id="loginForm" method="POST" action="/login"  >
                        @csrf
                        <div class="vertical-input-group">

                            <div class="input-group">
                                <span class="add-on"><i class="fa fa-user"></i> </span>
                                <input type="text" name="user_name" class="form-control" id="userName" required placeholder="اسم المستخدم" oninvalid="this.setCustomValidity('الرجاء ادخال اسم المستخدم')">
                            </div>

                            <div class="input-group mt-2">
                                <span class="add-on"><i class="fa fa-key"></i> </span>
                                <input type="password" name="password" class="form-control" id="loginPassword" required placeholder="كلمة المرور" oninvalid="this.setCustomValidity('الرجاء ادخال كلمة المرور')">
                            </div>

                            <div class="form-check form-check-inline mt-1">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label mr-1">تذكرني</label>
                            </div>

                        </div>

                        <button class="btn btn-primary btn-block shadow-none my-4" type="submit">تسجيل دخول</button>
                    </form>

                    <p class="text-center"><a class="btn-link" href="/reset/password">نسيت كلمة المرور؟</a></p>

                </div>
                <!-- Footer
    ============================================= -->
                <div class="col-12 fixed-bottom bg-white py-2">
                    <p class="text-center text-muted mb-0">
                        © 2020 <a href="index.html">ITTEZAN.COM</a> — <span class="lang" key="All rights reserved">جميع الحقوق محفوظة</span>
                    </p>
                </div>
                <!-- Footer End -->
            </div>
            <!-- Login Form End -->
        </div>
    </div>

</body>

</html>

<!-- JS -->
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>