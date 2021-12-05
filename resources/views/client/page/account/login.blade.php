@extends('client.master-template')
@section('title')
    <title>Đăng nhập</title>
@endsection
@section('css-page')
    @include('client.page.cart.css')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/jquery.toast.min.css">
    <style>
        .error-input {
            border: 1px solid red !important;
        }

        .success-input {
            border: none !important;
        }

        .message-error {
            font-size: 13px;
            padding-left: 5px;
        }

    </style>
@endsection
@section('content-page')
    <!-- Title page -->
    @include('client.include.title-page',['title'=>'Đăng nhập'])

    <!-- content page -->
    <div class="bg0 p-tb-100">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4  m-b-50">
                <form action="/user/login" method="post" name="login">
                    @csrf
                    <div class="col-md-12 col-lg-12">
                        <div>
                            <h5 class="txt-m-124 cl3 p-b-28" style="text-align: center;font-weight: bolder ">
                                Đăng nhập
                            </h5>
                            <div class="row ">
                                <div class="col-12 p-b-23">
                                    <div>
                                        <div class="txt-s-101 cl6 p-b-10" style="font-weight: bolder">Email:</div>
                                        <input class="txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                               value="{{$_COOKIE['email'] ?? Request::old('email')}}" type="text" name="email" placeholder="Nhập tên tài khoản">
                                        @error('email')
                                        <div class="text-danger col-12">* {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div>
                                        <div class="txt-s-101 cl6 p-b-10" style="font-weight: bolder">Mật khẩu:
                                        </div>
                                        <input
                                            class="plh2 txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1 "
                                            value="{{$_COOKIE['password'] ?? ''}}" type="password" name="password" placeholder="Nhập mật khẩu">
                                        @error('password')
                                        <div class="text-danger col-12">* {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 p-b-23 mt-3">
                                    <input class="dis-inline-block plh2 txt-s-115 cl3 bo-all-1 bocl15 p-rl-20 focus1 "
                                           <?php if(isset($_COOKIE['remember_user'])){ echo 'checked';} ?> type="checkbox" name="remember_user">
                                    <span>Giữ tôi luôn đăng nhập</span>
                                </div>
                                <div class="col-12 mb-2" style="text-align: center">
                                    <p>Bạn mới vào trang web?<a class="text-info ml-2" href="/user/register">Tạo mới tài
                                            khoản</a></p>
                                </div>
                                <div class="col-12 p-b-50">
                                    <button style="background-color: #8db263; width: 100%"
                                            class="flex-c-m txt-s-105 cl0  size-a-34 hov-btn2 trans-04 ">
                                        Đăng nhập
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>

        </div>

        @endsection

        @section('js-page')
            @include('client.page.cart.js')
            <script src="/js/jquery.toast.min.js"></script>
            <script src="/js/client-custom.js"></script>
@endsection
