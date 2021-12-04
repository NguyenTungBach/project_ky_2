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
        <div style="margin-left: 600px">
            <form action="#" method="get" name="orderForm">
                @csrf
                <div class="w-100 d-flex">
                    <div class="w-60  p-t-68 pr-5">
                        <div class="row " >
                            <div class="col-md-12 col-lg-12 p-b-50">
                                <div>
                                    <h5 class="txt-m-124 cl3 p-b-28" style="text-align: center;font-weight: bolder " >
                                        Đăng kí tài khoản
                                    </h5>
                                    <div class="row ">
                                        <div class="col-12 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10" style="font-weight: bolder">Tên tài khoản:</div>
                                                <input class="txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                                       type="text" name="account" placeholder="Nhập tên tài khoản">
                                                <span class="cl12 message-error errorShip_name"></span>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10" style="font-weight: bolder">Họ và tên

                                                </div>
                                                <input class="txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                                       type="text" name="name" placeholder="Nhập tên">
                                                <span class="cl12 message-error errorShip_phone"></span>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10" style="font-weight: bolder">Địa chỉ

                                                </div>
                                                <input class="txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                                       type="text" name="address" placeholder="Nhập địa chỉ">
                                                <span class="cl12 message-error errorShip_phone"></span>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10" style="font-weight: bolder">Số điện thoại:

                                                </div>
                                                <input class="txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                                       type="text" name="phone" placeholder="Nhập số điện thoại">
                                                <span class="cl12 message-error errorShip_phone"></span>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10" style="font-weight: bolder">Email:

                                                </div>
                                                <input class="txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                                       type="text" name="email" placeholder="Nhập email">
                                                <span class="cl12 message-error errorShip_email"></span>
                                            </div>
                                        </div>

                                        <div class="col-12 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10" style="font-weight: bolder">Mật khẩu:
                                                </div>
                                                <input
                                                    class="plh2 txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1 "
                                                    type="password" name="password" placeholder="Nhập mật khẩu">
                                                <span class="cl12 errorShip_address"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10" style="font-weight: bolder">Xác nhận mật khẩu:
                                                </div>
                                                <input
                                                    class="plh2 txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1 "
                                                    type="password" name="confirmPassword" placeholder="Nhập lại mật khẩu">
                                                <span class="cl12 errorShip_address"></span>
                                            </div>
                                            <div class="dis-flex col-12" style="margin-left: 250px">
                                                <button style="background-color: #8db263"
                                                        class="flex-c-m txt-s-105 cl0  size-a-34 hov-btn2 trans-04 p-rl-10 m-t-43 ">
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
            </form>
        </div>

        @endsection

        @section('js-page')
            @include('client.page.cart.js')
            <script src="/js/jquery.toast.min.js"></script>
            <script src="/js/client-custom.js"></script>
@endsection
