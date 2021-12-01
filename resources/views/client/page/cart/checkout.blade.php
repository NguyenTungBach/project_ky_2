@extends('client.master-template')
@section('title')
    <title>Thanh toán</title>
@endsection
@section('css-page')
    @include('client.page.cart.css')
    <link rel="stylesheet" href="/css/jquery.toast.min.css">
    <style>
        .back-to-home:hover {
            color: limegreen;
        }

        .size-a-38 div .txt-m-104, .col-sm-6 div .txt-m-104, .col-sm-12 div .txt-m-104 {
            font-weight: 600;
        }

        .size-a-38, .col-sm-6, .col-sm-12 {
            margin-bottom: 15px;
        }

        .table-shop {
            border-collapse: collapse;
            width: 100%;
            min-width: unset !important;
        }
    </style>
@endsection
@section('content-page')
    <!-- Title page -->
    @include('client.include.title-page',['title'=>'Thanh toán'])
    <meta name="orderID" content="{{$order->id}}">
    <!-- content page -->
    <div class="bg0 p-t-95">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 p-b-10">

                    <div>
                        <h4 class="txt-m-124 cl3 p-b-28">
                            Chi tiết đơn hàng
                        </h4>
                        @php
                            $total_price_in_usd = 0;
                        @endphp
                        <div class="row p-b-10">
                            <div class="col-sm-12 p-b-5">
                                <div>
                                    <span class="txt-m-104 cl6 p-b-5">
                                        Trạng thái đơn hàng:
                                    </span>
                                    <span style="font-weight: unset !important;" class="pl-2">{{$order->handlerStatus}}</span>
                                </div>
                            </div>
                            <div class="col-sm-12 p-b-5">
                                <div>
                                    <span class="txt-m-104 cl6 p-b-5">
                                        Tình trạng thanh toán :
                                    </span>
                                    @if($order->check_out)
                                        <span style="font-weight: unset !important;" class="pl-2">Đã thanh toán <i class="fa fa-check-circle ml-2 text-success" aria-hidden="true"></i></span>
                                    @else
                                        <span style="font-weight: unset !important;" class="pl-2">Chưa thanh toán <i class="fa fa-times-circle-o ml-2 text-danger" aria-hidden="true"></i></span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12 p-b-5">
                                <div>
                                    <div class="txt-m-104 cl6 p-b-10">
                                        Người nhận:
                                    </div>
                                    <span class="pl-2">{{$order->ship_name}}</span>
                                </div>
                            </div>
                            <div class="col-sm-12 p-b-5">
                                <div>
                                    <div class="txt-m-104 cl6 p-b-10">
                                        Số điện thoại:
                                    </div>
                                    <p class="pl-2">{{$order->ship_phone}}</p>
                                </div>
                            </div>
                            <div class="col-sm-12 p-b-5">
                                <div>
                                    <div class="txt-m-104 cl6 p-b-10">
                                        Email:
                                    </div>
                                    <p style="word-wrap: break-word;" class="pl-2">{{$order->ship_email}}</p>
                                </div>
                            </div>
                            <div class="col-sm-12 p-b-23">
                                <div>
                                    <div class="txt-m-104 cl6 p-b-10">
                                        Địa chỉ:
                                    </div>
                                    <p style="word-wrap: break-word;" class="pl-2">{{$order->ship_address}}</p>
                                </div>
                            </div>
                            <div class="size-a-38 p-rl-15">
                                <div>
                                    <div class="txt-m-104 cl6 p-b-10">
                                        Chú thích:
                                    </div>
                                    <p style="word-wrap: break-word;" class="pl-2">{{$order->ship_note}}</p>
                                </div>
                            </div>
                        </div>
{{--                        <a href="/check-mail?orderID={{$order->id}}">Thư hóa đơn thanh toán</a>--}}
                    </div>
                </div>

                <div class="col-md-8 col-lg-8 mb-5">
                    <div class="how-bor4 p-t-35 p-b-20 p-rl-30 ">
                        <h4 class="txt-m-124 cl3 p-b-11">
                            Mã đơn hàng {{$order->id}}
                        </h4>

                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart table-shop">
                                <tr class="table_head bg12">
                                    <th class="column-1 p-l-30" style="width: 50%">Sản phẩm</th>
                                    <th class="column-2 text-center">Giá (VND)</th>
                                    <th class="column-3 text-center" style="width: 15%">Số lượng</th>
                                    <th class="column-4 text-center" style="width: 20%">Tổng giá (VND)</th>
                                </tr>
                            @foreach($order->orderDetails as $orderDetail)
                                @php
                                    if (isset($total_price_in_usd) && isset($orderDetail))
                                @endphp
                                <!-- cart header item -->
                                    <tr class="table_row">
                                        <td class="column-1">
                                            <div class="flex-w flex-m">
                                                <div class="wrap-pic-w size-w-56 bo-all-1 bocl12 m-r-10">
                                                    <img src="{{$orderDetail->product->FirstImage}}" alt="IMG">
                                                </div>
                                                <span style="font-size: 16px">
                                                    {{$orderDetail->product->name}}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="column-2 text-center">
                                            {{\App\Helpers\Helper::formatVND($orderDetail->product->price)}}
                                        </td>
                                        <td class="column-3 text-center">
                                            {{$orderDetail->quantity}}
                                        </td>
                                        <td class="column-4 text-center">
                                            {{\App\Helpers\Helper::formatVND($orderDetail->product->price * $orderDetail->quantity)}}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            <div class="flex-w flex-sb-m txt-m-103 p-tb-23 pl-4 pr-4">
                                <h3 class="size-w-61 cl6">
                                    Total
                                </h3>

                                <span class=" cl10">
                                {{\App\Helpers\Helper::formatVND($order->total_price)}} <small>VND</small>
                                      <span
                                          class="pl-4">~ ${{\App\Helpers\Helper::convertVNDtoUSD($order->total_price)}}</span>
                                </span>

                            </div>
                            <div style="justify-content: center" class="flex-w flex-sb-m txt-m-103 mb-2">
                                <p>( Giá dollar hôm nay: $1 = 24,000 <small>VND</small> )</p>
                            </div>

                            @if($order->check_out)
                                <button type="button" style=" border-radius: 20px"
                                        class="flex-c-m txt-s-105 cl0 bg10 size-a-21 hov-btn1 trans-04 p-rl-10">
                                    <a style="color: #FFFFFF;" href="/products">Continue Shopping</a>
                                </button>
                            @else
                                <div class="p-rl-140" id="paypal-button"></div>
                                <div class="dis-flex align-items-center justify-content-end mt-3">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <a href="/home"
                                       style="color: #ababab; border-radius: 20px; padding: 4px"
                                       class="back-to-home"
                                    >Về trang chủ</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js-page')
    @include('client.page.cart.js')
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script src="/js/jquery.toast.min.js"></script>
    <script>
        var orderID = document.querySelector('meta[name=orderID]').content;
        paypal.Button.render({
            env: 'sandbox', // Or 'production'
            locale: 'en_US',
            style: {
                size: 'responsive',
                color: 'gold',
                shape: 'pill',
            },
            // Set up the payment:
            // 1. Add a payment callback
            payment: function (data, actions) {
                // 2. Make a request to your server
                return actions.request.post('/order/create-payment', {
                    {{--orderID: {{$order->id}}--}}
                    orderID: orderID
                })
                    .then(function (res) {
                        // 3. Return res.id from the response
                        return res.id;
                    });
            },
            // Execute the payment:
            // 1. Add an onAuthorize callback
            onAuthorize: function (data, actions) {
                // 2. Make a request to your server
                return actions.request.post('/order/execute-payment', {
                    paymentID: data.paymentID,
                    payerID: data.payerID,
                    orderID: orderID,
                })
                    .then(function (res) {
                        // 3. Show the buyer a confirmation message.
                        // alert("Đã thanh toán hàng, vui lòng reset trang");
                        // window.location.reload(false); // load lại trang
                        $.toast({
                            heading: 'Success',
                            text: 'Thanh toán thành công',
                            showHideTransition: 'slide',
                            icon: 'success'
                        })
                        // window.location.reload(false); // load lại trang
                        setTimeout(function () {
                            window.location.reload(false);
                        }, 3000);
                    });
            }
        }, '#paypal-button');
    </script>
@endsection

