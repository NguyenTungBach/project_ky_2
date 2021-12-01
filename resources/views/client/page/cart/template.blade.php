@extends('client.master-template')
@section('title')
    <title>Giỏ hàng</title>
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
    @include('client.include.title-page',['title'=>'Giỏ hàng'])



    <!-- content page -->
    <div class="bg0 p-tb-100">
        <div class="container">

            <div id="table-cart-ajax" class="wrap-table-shopping-cart">
                <table class="table-shopping-cart">
                    <tr class="table_head bg12">
                        <th class="column-1 p-l-30">SẢN PHẨM</th>
                        <th class="column-2" style="width: 12%">GIÁ (VND)</th>
                        <th class="column-3" style="width: 18%">SỐ LƯỢNG</th>
                        <th class="column-4" style="width: 16%">TỔNG GIÁ (VND)</th>
                        <th class="column-4">Thay đổi</th>
                    </tr>
                    <div>
                    <?php
                    $totalPrice = 0;
                    ?>

                    @if(sizeof($shoppingCart) > 0)
                        @foreach($shoppingCart as $cartItem)
                            <?php
                            if (isset($cartItem)) {
                                $totalPrice += $cartItem->unitPrice * $cartItem->quantity;
                            }
                            ?>
                            <!-- cart header item -->
                                <tr class="table_row">
                                    <td class="column-1">
                                        <div class="flex-w flex-m">
                                            <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                                <img src="{{$cartItem->thumbnail}}" alt="IMG">
                                            </div>
                                            <span>
                                    {{$cartItem->name}}
                                </span>

                                        </div>
                                    </td>
                                    <td class="column-2">
                                        {{\App\Helpers\Helper::formatVND($cartItem->unitPrice)}}
                                    </td>
                                    <td class="column-3">
                                        <div class="wrap-num-product flex-w flex-m bg12 p-rl-10">
                                            <input type="hidden" name="id" value="{{$cartItem->id}}">
                                            <div class="btn-num-product-down flex-c-m fs-29 cart-down"></div>
                                            <input class="txt-m-102 cl6 txt-center num-product" type="number"
                                                   name="quantity"
                                                   data-id="{{$cartItem->id}}"
                                                   value="{{$cartItem->quantity}}" min="1">
                                            <div class="btn-num-product-up flex-c-m fs-16 cart-up"></div>
                                        </div>
                                    </td>
                                    <td class="column-4">
                                        <div class="flex-w flex-sb-m">
                                            <span>{{\App\Helpers\Helper::formatVND($cartItem->unitPrice * $cartItem->quantity)}}</span>
                                        </div>
                                    </td>
                                    <td class="column-4">
                                        <div class="dis-flex position-relative">
{{--                                            <button type="button"--}}
{{--                                                    data-id="{{$cartItem->id}}"--}}
{{--                                                    class="update-cart mr-1 delete-cart flex-c-m txt-s-105 cl0 bg10 p-1 hov-btn2 trans-04 pointer">--}}
{{--                                                Update--}}
{{--                                            </button>--}}
                                            <button type="button"
                                                    onclick="document.getElementById('id01').style.display='block'"
                                                    class=" ml-2 pt-1 delete-product"
                                                    style="border-radius: 2px; font-size: 14px; color: #a7a7a8">
                                                Xóa
                                            </button>
                                            {{--             delete modal                   --}}
                                            <div id="id01" class="w3-modal">
                                                <div class="w3-modal-content" style="width: 650px;">
                                                    <div class="w3-container p-3">
                                                        <span
                                                            onclick="document.getElementById('id01').style.display='none'"
                                                            class="w3-button w3-display-topright">&times;</span>
                                                        <p class="p-3">Bạn có chắc muốn xóa sản phẩm {{$cartItem->name}}
                                                            , khỏi giỏ hàng</p>
                                                        <div class="float-right">
                                                            <button data-id="{{$cartItem->id}}" type="button"
                                                                    class="btn btn-secondary remove-product">Yes
                                                            </button>
                                                            <button type="button"
                                                                    onclick="document.getElementById('id01').style.display='none'"
                                                                    class="btn btn-success">No
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach
                        @else
                            <div class="text-center alert alert-info">
                                <p>Giỏ hàng trống, xin vui lòng <a href="/products" class="text-primary">Nhấn vào
                                        đây</a> để
                                    chọn vài sản phẩm bạn muốn </p>
                            </div>
                        @endif
                    </div>
                </table>
            </div>
            <form action="/order" method="post" name="orderForm">
                @csrf
                <div class="w-100 d-flex">
                    <div class="w-60  p-t-68 pr-5">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 p-b-50">
                                <div>
                                    <h4 class="txt-m-124 cl3 p-b-28">
                                        Chi tiết thanh toán
                                    </h4>
                                    <div class="row">
                                        <div class="col-12 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">Người nhận:</div>
                                                <input class="txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                                       type="text" name="ship_name" placeholder="Nhập tên">
                                                <span class="cl12 message-error errorShip_name"></span>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">Số điện thoại:

                                                </div>
                                                <input class="txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                                       type="text" name="ship_phone" placeholder="Nhập số điện thoại">
                                                <span class="cl12 message-error errorShip_phone"></span>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">Email

                                                </div>
                                                <input class="txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                                       type="text" name="ship_email" placeholder="Nhập email">
                                                <span class="cl12 message-error errorShip_email"></span>
                                            </div>
                                        </div>

                                        <div class="col-12 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">Địa chỉ
                                                </div>
                                                <input
                                                    class="plh2 txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1 "
                                                    type="text" name="ship_address" placeholder="Nhập địa chỉ">
                                                <span class="cl12 errorShip_address"></span>
                                            </div>
                                        </div>

                                        <div class="col-12 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">Chú thích:</div>
                                                <textarea
                                                    class="plh2 txt-s-115 cl3 size-a-38 bo-all-1 bocl15 p-rl-20 p-tb-10 focus1"
                                                    name="ship_note"
                                                    placeholder="Những yêu cầu về sản phẩm muốn được giao">
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-40 p-t-68">
                        <div class="w-100 pl-3">
                            <p class="txt-m-123 cl3 p-b-18">Tổng giỏ hàng</p>
                        </div>

                        <div class="d-flex bo-b-1 bocl15 w-100  p-tb-18">

                            <p class="w-50 txt-m-109 cl3">Tổng phụ</p>
                            <p class=" w-50 txt-m-104 cl6" id="tongPhu">{{\App\Helpers\Helper::formatVND($totalPrice)}}
                                <small>VND</small></p>

                        </div>


                        <div class="d-flex bo-b-1 bocl15 w-100 p-tb-18">
                    <span class="w-50 txt-m-109 cl3">
                        Tổng giá tiền
                    </span>
                            <span class="w-50 txt-m-104 cl10" id="tongTien">
                        {{\App\Helpers\Helper::formatVND($totalPrice)}} <small>(VND)</small>
                                ~ ${{\App\Helpers\Helper::convertVNDtoUSD($totalPrice)}}
                    </span>
                        </div>

                        <div class="dis-flex">
                            <a href="/products" style="color: #FFF; "
                               class="flex-c-m txt-s-105 cl0 bg-secondary size-a-34 hov-btn2 trans-04 p-rl-10 m-t-43 mr-3">
                                Tiếp tục mua hàng
                            </a>

                            <button style="background-color: #8db263"
                                    class="flex-c-m txt-s-105 cl0  size-a-34 hov-btn2 trans-04 p-rl-10 m-t-43 ">
                                Tiến hành thanh toán
                            </button>
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
            <script>
                $(document).ready(function () {
                    //================================= validate form ======================================
                    const ship_name = $('input[name=ship_name]');
                    const ship_phone = $('input[name=ship_phone]');
                    const ship_email = $('input[name=ship_email]');
                    const ship_address = $('input[name=ship_address]');
                    const ship_note = $('input[name=ship_note]');
                    const errorElement = $('#error');

                    function isVietnamesePhoneNumber(number) {
                        return /(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b/.test(number);
                    }

                    function validateEmail(email) {
                        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        return re.test(String(email).toLowerCase());
                    }

                    $('form[name=orderForm]').submit(function (event) {
                        let message = [];
                        errorElement.html("");
                        if (ship_name.val() === '' || ship_name.val() == null) {
                            let errorName = $('.errorShip_name');
                            message.push('Yêu cầu nhập tên người nhận\n');
                            errorName.html(`<i class="fa fa-info-circle mr-1"></i>Yêu cầu nhập tên người nhận`);
                            ship_name.addClass('error-input')
                        } else {
                            $('.errorShip_name').text("");
                            ship_name.addClass('success-input')
                        }
                        if (ship_phone.val() === '' || ship_phone.val() == null) {
                            message.push('Yêu cầu nhập số điện thoại\n');
                            $('.errorShip_phone').html(`<i class="fa fa-info-circle mr-1"></i>Yêu cầu nhập số điện thoại`);
                            ship_phone.addClass('error-input')
                        } else {
                            if (!isVietnamesePhoneNumber(ship_phone.val())) {
                                message.push('Đây không phải số điện thoại Việt Nam\n');
                                $('.errorShip_phone').html(`<i class="fa fa-info-circle mr-1"></i>Đây không phải số điện thoại Việt Nam`);
                                ship_phone.addClass('error-input')
                            } else {
                                $('.errorShip_phone').text("");
                                ship_phone.addClass('success-input')
                            }
                        }
                        if (ship_email.val() === '' || ship_email.val() == null) {
                            message.push('Yêu cầu nhập Email\n');
                            $('.errorShip_email').html(`<i class="fa fa-info-circle mr-1"></i>Yêu cầu nhập Email`);
                            ship_email.addClass('error-input')
                        } else {
                            if (!validateEmail(ship_email.val())) {
                                message.push('Đây không phải Email\n');
                                $('.errorShip_email').html(`<i class="fa fa-info-circle mr-1"></i>Đây không phải Email`);
                                ship_email.addClass('error-input')
                            } else {
                                $('.errorShip_email').text("");
                                ship_email.addClass('success-input')
                            }
                        }
                        if (ship_address.val() === '' || ship_address.val() == null) {
                            message.push('Yêu cầu nhập địa chỉ\n');
                            $('.errorShip_address').html(`<i class="fa fa-info-circle mr-1"></i>Yêu cầu nhập địa chỉ`);
                            ship_address.addClass('error-input')
                        } else {
                            $('.errorShip_address').text("");
                            ship_address.addClass('success-input')
                        }
                        if (message.length > 0) {
                            for (let i = 0; i < message.length; i++) {
                                errorElement.append("<div>" + message[i] + "</div>");
                            }
                            event.preventDefault();
                            return false;
                        }
                        if (message.length > 0) {
                            event.preventDefault();
                            return false;
                        }
                    });


                });


            </script>
@endsection
