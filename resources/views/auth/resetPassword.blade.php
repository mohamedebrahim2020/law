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
    <link rel="stylesheet" type="text/css" href="{{ asset('js/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href= "{{ asset('css/loginStyle.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script>
    function validate() {
            let Email = document.getElementById("userEmail");
            let EmailErr = document.getElementById("user_EmailErr");
            let Password = document.getElementById("loginPassword");
            let PasswordErr = document.getElementById("loginPasswordErr");
            if (Email.value == "" &&  Password.value == "" ) {
                EmailErr.classList.add("text-danger");
                EmailErr.innerHTML = "الرجاء إدخال إيميل المستخدم";
                PasswordErr.classList.add("text-danger");
                PasswordErr.innerHTML = " الرجاء إدخال كلمة المرور الجديدة";
                return false;
            } else if (Email.value == "" ) {
                PasswordErr.innerHTML = "";
                EmailErr.classList.add("text-danger");
                EmailErr.innerHTML = "الرجاء إدخال إيميل المستخدم";
                return false;
            } else if (Password.value == "") {
                EmailErr.innerHTML = "";
                PasswordErr.classList.add("text-danger");
                PasswordErr.innerHTML = " الرجاء إدخال كلمة المرور الجديدة";
                return false;   
            }else {
                EmailErr.innerHTML = "";
                PasswordErr.innerHTML = "";

            }

         
        return (true);
    }
    </script>
<body>
    <div id="main-wrapper" class="h-100 login-body">
        <div class="container h-100">
   
            <!-- Login Form
    ============================================= -->
            <div class="row no-gutters h-100">
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 m-auto py-5">
                    <div class="logo text-center">
                        <a href="login.html" title="Smart Loyar">
                            <img class="logo-sm" src="{{ asset('img/logo1.png') }}" alt="logo">
                        </a>
                    </div>
                    <p class="lead text-center mb-4">إعادة تعيين كلمة السر</p>

                    <!-- <p class="lead text-center alert alert-danger">خطأ!.. رمز التحقق غير صحيح!!</p>-->

                    <form id="loginForm" method="POST" action="{{ route('password.reset') }}" onsubmit="return(validate());">
                        @csrf
                        <div class="vertical-input-group">

                            <div class="input-group">
                                <span class="add-on"><i class="fa fa-user"></i> </span>
                                <input type="email" name="email" class="form-control" id="userEmail" placeholder="الإيميل" >
                            </div>
                            <div>
                                @if(session('userMessage')) 
                                <span class="text-danger" id="user_EmailErr">{{ session('userMessage') }}</span> 
                                @else
                                <span  id="user_EmailErr"></span> 
                                @endif
                            </div>
                       
                            <div class="input-group mt-2">
                                <span class="add-on"><i class="fa fa-key"></i> </span>
                                <input type="password" name="password" class="form-control" id="loginPassword" placeholder="الرقم السري الجديد">
                            </div>
                            <div>
                                @if(session('passwordMessage'))    
                                <span class="text-danger" id="loginPasswordErr">{{ session('passwordMessage') }}</span> 
                                @else
                                <span  id="loginPasswordErr"></span> 
                                @endif
                            </div>
                            {{-- <div class="input-group mt-2">
                                <span class="add-on"><i class="fa fa-key"></i> </span>
                                <input type="password" name="password_confirmation" class="form-control" id="loginPassword" placeholder="كلمة المرور" >
                            </div>
                            @error('password_confirmation')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror --}}
              


                        </div>

                        <button class="btn btn-primary btn-block shadow-none my-4" type="submit">تأكيد</button>
                    </form>

                    <p class="text-center"><a class="btn-link" href="/login/page">الصفحة الرئيسية</a></p>

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

<!-- Core -->
{{-- <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> --}}
