@extends('client.master-template')
@section('title')
    <title>Đăng ký</title>
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
    @include('client.include.title-page',['title'=>'Đăng kí tài khoản'])

    <!-- content page -->
    <div class="bg0 p-tb-100">
        <div class="container">
            <form action="/user/register" method="post" name="register">
                @csrf
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6 m-b-50">
                        <div class="w-100">
                            <div>
                                <div class="row ">
                                    <div class="col-md-12 col-lg-12 p-b-50">
                                        <div>
                                            <h5 class="txt-m-124 cl3 p-b-28"
                                                style="text-align: center;font-weight: bolder ">
                                                Đăng kí tài khoản
                                            </h5>
                                            <div class="row ">
                                                @if(session()->has('fail'))
                                                    <div class=" col-12 p-b-20 text-danger">
                                                        *{{session()->get('fail')}}
                                                    </div>
                                                @endif
                                                @if(session()->has('success'))
                                                    <div class="col-12 p-b-20 text-success">
                                                        {{session()->get('success')}}
                                                    </div>
                                                @endif
                                                <div class="col-12 p-b-23">
                                                    <div>
                                                        <div class="txt-s-101 cl6 p-b-10" style="font-weight: bolder">
                                                            Email:
                                                        </div>
                                                        <input
                                                            class="txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                                            value="{{Request::old('email')}}" type="text" name="email"
                                                            placeholder="Nhập tên tài khoản">
                                                        @error('email')
                                                        <div class="text-danger col-12">* {{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 p-b-23">
                                                    <div>
                                                        <div class="txt-s-101 cl6 p-b-10" style="font-weight: bolder">Họ
                                                            và tên

                                                        </div>
                                                        <input
                                                            class="txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                                            value="{{Request::old('name')}}" type="text" name="name"
                                                            placeholder="Nhập tên">
                                                        @error('name')
                                                        <div class="text-danger col-12">* {{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 p-b-23">
                                                    <div>
                                                        <div class="txt-s-101 cl6 p-b-10" style="font-weight: bolder">
                                                            Địa chỉ

                                                        </div>
                                                        <input
                                                            class="txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                                            value="{{Request::old('address')}}" type="text"
                                                            name="address" placeholder="Nhập địa chỉ">
                                                        @error('address')
                                                        <div class="text-danger col-12">* {{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-sm-12 p-b-23">
                                                    <div>
                                                        <div class="txt-s-101 cl6 p-b-10" style="font-weight: bolder">Số
                                                            điện thoại:

                                                        </div>
                                                        <input
                                                            class="txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                                            value="{{Request::old('phone')}}" type="text" name="phone"
                                                            placeholder="Nhập số điện thoại">
                                                        @error('phone')
                                                        <div class="text-danger col-12">* {{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-12 p-b-23">
                                                    <div>
                                                        <div class="txt-s-101 cl6 p-b-10" style="font-weight: bolder">
                                                            Mật khẩu:
                                                        </div>
                                                        <input
                                                            class="plh2 txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1 "
                                                            type="password" name="password" placeholder="Nhập mật khẩu">
                                                        @error('password')
                                                        <div class="text-danger col-12">* {{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 p-b-23">
                                                    <div>
                                                        <div class="txt-s-101 cl6 p-b-10" style="font-weight: bolder">
                                                            Xác nhận mật khẩu:
                                                        </div>
                                                        <input
                                                            class="plh2 txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1 "
                                                            type="password" name="confirmPassword"
                                                            placeholder="Nhập lại mật khẩu">
                                                        @error('confirmPassword')
                                                        <div class="text-danger col-12">* {{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="col-md-12 col-sm-12 text-center mb-2">
                                                    <p>Bạn đã là thành viên? <a class="text-info ml-2" href="/user/login">Login</a></p>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <button style="background-color: #8db263; width: 100%"
                                                            class="flex-c-m txt-s-105 cl0  size-a-34 hov-btn2 ">
                                                        Đăng ký
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3"></div>

                </div>
            </form>
        </div>

        @endsection

        @section('js-page')
        @include('client.page.cart.js')
        <script src="/js/jquery.toast.min.js"></script>

        <script src="/js/client-custom.js"></script>

            <!--Start of Tawk.to Script-->
            <script type="text/javascript">
                var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                (function(){
                    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                    s1.async=true;
                    s1.src='https://embed.tawk.to/6170106f86aee40a573782e7/1fies0ctc';
                    s1.charset='UTF-8';
                    s1.setAttribute('crossorigin','*');
                    s0.parentNode.insertBefore(s1,s0);
                })();
            </script>
            <!--End of Tawk.to Script-->

            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6170425ce6ce4b7a"></script>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
@endsection
