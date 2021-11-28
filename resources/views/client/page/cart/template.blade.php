@extends('client.master-template')
@section('title')
    <title>Cart</title>
@endsection
@section('css-page')
    @include('client.page.cart.css')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection
@section('content-page')
    <!-- Title page -->
    @include('client.include.title-page',['title'=>'Cart'])



    <!-- content page -->
    <div class="bg0 p-tb-100">
        <div class="container">

            <div class="wrap-table-shopping-cart">
                <table class="table-shopping-cart">
                    <tr class="table_head bg12">
                        <th class="column-1 p-l-30">Product</th>
                        <th class="column-2">Price</th>
                        <th class="column-3">Quantity</th>
                        <th class="column-4">Total</th>
                        <th class="column-4">Action</th>
                    </tr>
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
                                <form action="/cart/update" method="post">
                                    @csrf
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
                                            <div class="btn-num-product-down flex-c-m fs-29 "></div>
                                            <input class="txt-m-102 cl6 txt-center num-product" type="number"
                                                   name="quantity"
                                                   value="{{$cartItem->quantity}}" min="1">
                                            <div class="btn-num-product-up flex-c-m fs-16 "></div>
                                        </div>
                                    </td>
                                    <td class="column-4">
                                        <div class="flex-w flex-sb-m">
                                            <span>{{\App\Helpers\Helper::formatVND($cartItem->unitPrice * $cartItem->quantity)}}</span>
                                        </div>
                                    </td>
                                    <td class="column-4">
                                        <div class="dis-flex position-relative">
                                            <button
                                                class="mr-1 delete-cart flex-c-m txt-s-105 cl0 bg10 pl-2 pr-2 hov-btn2 trans-04 pointer">
                                                Update
                                            </button>
                                            <button type="button" id="delete-product"
                                                    onclick="document.getElementById('id01').style.display='block'"
                                                    class=" ml-2 pt-1"
                                                    style="border-radius: 2px; font-size: 14px; color: #a7a7a8">
                                                Delete
                                            </button>
                                            {{--             delete modal                   --}}
                                            <div id="id01" class="w3-modal">
                                                <div class="w3-modal-content">
                                                    <div class="w3-container p-3">
                                                        <span
                                                            onclick="document.getElementById('id01').style.display='none'"
                                                            class="w3-button w3-display-topright">&times;</span>
                                                        <p class="p-3">Are you sure you want to remove the product from
                                                            the cart?</p>
                                                        <div class="float-right">
                                                            <a class="btn btn-secondary"
                                                               href="/cart/remove?id={{$cartItem->id}}">Yes</a>
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
                                </form>
                            </tr>
                        @endforeach
                    @else
                        <div class="text-center alert alert-info">
                            <p>Cart is empty, please <a href="/products" class="text-primary">CLICK HERE</a> to select
                                the product you want
                                to buy.</p>
                        </div>
                    @endif

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
                                        Billing details
                                    </h4>
                                    <div id="error" class="cl12 alert-danger pl-3 mb-3 "></div>
                                    <div class="row">
                                        <div class="col-12 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">Name</div>
                                                <input class="txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                                       type="text" name="ship_name" placeholder="Enter name...">
                                                <span class="cl12 message-error errorShip_name"></span>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">Phone
                                                    <span class="cl12">*</span>
                                                </div>
                                                <input class="txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                                       type="text" name="ship_phone" placeholder="Enter phone...">
                                                <span class="cl12 message-error errorShip_phone"></span>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">Email
                                                    <span class="cl12">*</span>
                                                </div>
                                                <input class="txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1"
                                                       type="text" name="ship_email" placeholder="Enter email...">
                                                <span class="cl12 message-error errorShip_email"></span>
                                            </div>
                                        </div>

                                        <div class="col-12 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">Address
                                                    <span class="cl12">*</span>
                                                </div>
                                                <input
                                                    class="plh2 txt-s-115 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1 "
                                                    type="text" name="ship_address" placeholder="Enter address....">
                                                <span class="cl12 errorShip_address"></span>
                                            </div>
                                        </div>

                                        <div class="col-12 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">Order notes</div>
                                                <textarea
                                                    class="plh2 txt-s-120 cl3 size-a-38 bo-all-1 bocl15 p-rl-20 p-tb-10 focus1"
                                                    name="ship_note"
                                                    placeholder="Note about your order, eg. special notes fordelivery.">
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
                            <p class="txt-m-123 cl3 p-b-18">CART TOTALS</p>
                        </div>

                        <div class="d-flex bo-b-1 bocl15 w-100  p-tb-18">
                            <span class="w-50 txt-m-109 cl3">Subtotal</span>
                            <span class=" w-50 txt-m-104 cl6">
                                {{\App\Helpers\Helper::formatVND($totalPrice)}} <small>(VND)</small>
                            ~ ${{\App\Helpers\Helper::convertVNDtoUSD($totalPrice)}}
                            </span>

                        </div>


                        <div class="d-flex bo-b-1 bocl15 w-100 p-tb-18">
                    <span class="w-50 txt-m-109 cl3">
                        Total
                    </span>
                            <span class="w-50 txt-m-104 cl10">
                        {{\App\Helpers\Helper::formatVND($totalPrice)}} <small>(VND)</small>
                                ~ ${{\App\Helpers\Helper::convertVNDtoUSD($totalPrice)}}
                    </span>
                        </div>

                        <div class="dis-flex">
                            <a href="/products" style="color: #FFF;"
                               class="flex-c-m txt-s-105 cl0 bg-secondary size-a-34 hov-btn2 trans-04 p-rl-10 m-t-43 mr-3">
                                Continue Shopping
                            </a>
                            <button
                                class="flex-c-m txt-s-105 cl0 bg-success size-a-34 hov-btn2 trans-04 p-rl-10 m-t-43 ">
                                proceed to checkout
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        @endsection

        @section('js-page')
            @include('client.page.cart.js')
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
                            message.push('Ship Name is required\n');
                            $('.errorShip_name').text("Ship Name is required");
                        } else {
                            $('.errorShip_name').text("");
                        }
                        if (ship_phone.val() === '' || ship_phone.val() == null) {
                            message.push('Ship Phone is required\n');
                            $('.errorShip_phone').text("Ship Phone is required");
                        } else {
                            if (!isVietnamesePhoneNumber(ship_phone.val())) {
                                message.push('This is not Ship Phone VietNam\n');
                                $('.errorShip_phone').text("This is not Ship Phone VietNam");
                            } else {
                                $('.errorShip_phone').text("");
                            }
                        }
                        if (ship_email.val() === '' || ship_email.val() == null) {
                            message.push('Ship Email is required\n');
                            $('.errorShip_email').text("Ship Email is required");
                        } else {
                            if (!validateEmail(ship_email.val())) {
                                message.push('Ship Email must be email\n');
                                $('.errorShip_email').text("Ship Email must be email");
                            } else {
                                $('.errorShip_email').text("");
                            }
                        }
                        if (ship_address.val() === '' || ship_address.val() == null) {
                            message.push('Ship Address is required\n');
                            $('.errorShip_address').text("Ship Address is required");
                        } else {
                            $('.errorShip_address').text("");
                        }
                        if (message.length > 0) {
                            for (let i = 0; i < message.length; i++) {
                                errorElement.append("<div>" + message[i] + "</div>");
                            }
                            // alert(message);
                            // errorElement.text(message.join(', '));
                            event.preventDefault();
                            return false;
                        }
                        if (message.length > 0) {
                            event.preventDefault();
                            return false;
                        }
                    });
                    //    ==================== modal confirm delete product ================================

                    $('.btn-num-product-up').on('click', function () {

                        let value = parseInt($(this).prev().val()) + 1
                        $(this).prev().val(value)
                    })

                    $('.btn-num-product-down').on('click', function () {
                        let value = parseInt($(this).next().val()) - 1
                        if (value < 0) {
                            $(this).next().val(0)
                        } else {
                            $(this).next().val(value)
                        }
                    })

                });
            </script>
@endsection