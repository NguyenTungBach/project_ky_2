<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/admin/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/admin/build/css/custom.min.css" rel="stylesheet">
    <style>
        .btn-custom{
            padding: 3px 15px 3px 15px;
            border: none;
            background-color: #9d9d9d;
            width: 100%;
        }
        .custom-clear{
            clear: left;
        }
    </style>
</head>

<body class="login">
<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <?php print_r($_COOKIE)?>
            <section class="login_content">
                <form method="POST" name="login" action="{{route('auth.login')}}">
                    @csrf
                    <h1>Đăng nhập admin</h1>
                    @if(Session::has('loginFail'))
                        <div class="text-danger"><i class="fa fa-info-circle mr-2"></i> {{ session()->get('loginFail') }}</div>
                    @endif
                    <div class="mb-4">
                        <input type="text" class="form-control mb-0" name="email" value="{{ $_COOKIE['email'] ?? Request::old('email')}}"
                               placeholder="Email"/>
                        @if($errors->has('email'))
                           <div> <p class="ml-2 text-danger float-left"><i class="fa fa-info-circle mr-2"></i>{{ $errors->first('email') }}</p></div>
                        @endif
                    </div>
                    <div class="w-100">
                        <input type="password" class="form-control mb-0" name="password" value="{{$_COOKIE['password'] ?? '' }}"
                               placeholder="Password"/>
                        @if($errors->has('password'))
                           <div class="w-100"><p class="ml-2 text-danger float-left clearfix"><i class="fa fa-info-circle mr-2"></i>{{ $errors->first('password') }}</p></div>
                        @endif
                    </div>
                    <div class="dis-flex align-items-center row ml-1 mt-2 mb-4 custom-clear">
                        <input class=""  type="checkbox" name="remember_admin" id="remember_me"
                               <?php if(isset($_COOKIE['remember_admin'])){ echo 'checked';} ?> value="remember_me">
                        <span class="ml-2" >Giữ tôi luôn đăng nhập</span>
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-secondary btn-custom">
                            Login
                        </button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="/admin/register" class="to_register">Create Account </a>
                        </p>

                        <div class="clearfix"></div>
                        <br/>

{{--                        <div>--}}
{{--                            <h1><i class="fa fa-user" aria-hidden="true"></i> Rau có sâu</h1>--}}
{{--                            <p>©2016 All Rights Reserved. Spring HeroBank! is an anti-slip bank for FPT students.--}}
{{--                                Privacy and Terms</p>--}}
{{--                        </div>--}}
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
