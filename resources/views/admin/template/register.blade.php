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
</head>

<body class="login">
<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="POST" name="Register" action="/admin/register">
                    @csrf
                    <h1>Create Account</h1>
                    @if(Session::has('success'))
                        <div class="text-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if(Session::has('emailExist'))
                        <div class="text-danger">
                            {{ session()->get('emailExist') }}
                        </div>
                    @endif
                    <div class="mb-4">
                        <input type="email" class="form-control mb-0" value="{{ Request::old('email') }}" placeholder="Email" name="email"/>
                        @if($errors->has('email'))
                            <span class="float-left text-danger ml-2"><i class="fa fa-info-circle mr-1"></i>{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control mb-0" value="{{ Request::old('password') }}" placeholder="Password" name="password"/>
                        @if($errors->has('password'))
                            <span class="float-left text-danger ml-2"><i class="fa fa-info-circle mr-1"></i>{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control mb-0" value="{{ Request::old('password_confirmation') }}" placeholder="Confirm password" name="password_confirmation"/>
                    </div>

                    <div class="mb-4">
                        <input type="text" class="form-control mb-0" value="{{ Request::old('fullname') }}" placeholder="Full name" name="fullname"/>
                        @if($errors->has('fullname'))
                            <span class="float-left text-danger ml-2"><i class="fa fa-info-circle mr-1"></i>{{ $errors->first('fullname') }}</span>
                        @endif
                    </div>
                    <div class="col-sm-12 col-md-12 p-0">
                        <button class="btn btn-secondary w-100" >Register
                        </button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Already a member ?
                            <a href="/admin/login" class="to_register font-weight-bold" style="font-size: 15px; color: #4B5F71"> Log in </a>
                        </p>

                        <div class="clearfix"></div>
                        <br/>

                        <div>
                            <h1><i class="fa fa-university" aria-hidden="true"></i> Spring HeroBank!</h1>
                            <p>©2016 All Rights Reserved. Spring HeroBank! is an anti-slip bank for FPT students.
                                Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
