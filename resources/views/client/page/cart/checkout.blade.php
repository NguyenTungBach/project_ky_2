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
                <div class="col-md-3 col-lg-3 p-b-10">
                    @if(session()->has('orderMessage'))
                        <div class=" alert alert-success">{{session()->get('orderMessage')}}</div>
                    @endif

                    @if($order->check_out)
                        <div class=" alert alert-success">Đã thanh toán</div>
                    @else
                            <div class=" alert alert-danger">Chưa thanh toán</div>
                    @endif

                    @switch($order->ship_status)
                        @case (2)
                            <div class="alert alert-warning">Đang chờ</div>
                        @break
                        @case (3)
                            <div class=" alert alert-primary">Đang giao hàng</div>
                        @break
                        @case (1)
                            <div class=" alert alert-success">Đã giao hàng</div>
                        @break
                        @case (0)
                            <div class=" alert alert-danger">Hủy đơn</div>
                        @break
                    @endswitch
                    <div>
                        <h4 class="txt-m-124 cl3 p-b-28">
                            Chi tiết đơn hàng
                        </h4>
                        @php
                            $total_price_in_usd = 0;
                        @endphp

                        <div class="row p-b-10">
                            <div class="col-sm-12 p-b-23">
                                <div>
                                    <div class="txt-m-104 cl6 p-b-10">
                                        Người nhận:
                                    </div>
                                    <p class="pl-2">{{$order->ship_name}}</p>
                                </div>
                            </div>
                            <div class="col-sm-12 p-b-23">
                                <div>
                                    <div class="txt-m-104 cl6 p-b-10">
                                        Số điện thoại:
                                    </div>
                                    <p class="pl-2">{{$order->ship_phone}}</p>
                                </div>
                            </div>
                            <div class="col-sm-12 p-b-23">
                                <div>
                                    <div class="txt-m-104 cl6 p-b-10">
                                        Email:
                                    </div>
                                    <p class="pl-2">{{$order->ship_email}}</p>
                                </div>
                            </div>
                            <div class="col-sm-12 p-b-23">
                                <div>
                                    <div class="txt-m-104 cl6 p-b-10">
                                        Địa chỉ:
                                    </div>
                                    <p class="pl-2">{{$order->ship_address}}</p>
                                </div>
                            </div>
                            <div class="size-a-38 p-rl-15">
                                <div>
                                    <div class="txt-m-104 cl6 p-b-10">
                                        Chú thích:
                                    </div>
                                    <p class="pl-2">{{$order->ship_note}}</p>
                                </div>
                            </div>
                        </div>
                        <a href="/check-mail?orderID={{$order->id}}">Thư hóa đơn thanh toán</a>
                    </div>
                </div>

                <div class="col-md-9 col-lg-9 ">
                    <div class="how-bor4 p-t-35 p-b-20 p-rl-30 ">
                        <h4 class="txt-m-124 cl3 p-b-11">
                            Mã đơn hàng {{$order->id}}
                        </h4>

                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart" style="min-width: 807px">
                                <tr class="table_head bg12">
                                    <th class="column-1 p-l-30" style="width: 48%">Sản phẩm</th>
                                    <th class="column-2" style="width: 14%">Giá (VND)</th>
                                    <th class="column-3" style="width: 12%">Số lượng</th>
                                    <th class="column-4" style="width: 15%">Tổng giá (VND)</th>
                                </tr>
                            @foreach($order->orderDetails as $orderDetail)
                                @php
                                    if (isset($total_price_in_usd) && isset($orderDetail))
                                @endphp
                                    <!-- cart header item -->
                                    <tr class="table_row">
                                        <td class="column-1">
                                            <div class="flex-w flex-m">
                                                <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                                    <img src="{{$orderDetail->product->FirstImage}}" alt="IMG">
                                                </div>
                                                <span>
                                                    {{$orderDetail->product->name}}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="column-2">
                                            {{\App\Helpers\Helper::formatVND($orderDetail->product->price)}}
                                        </td>
                                        <td class="column-3">
                                            <div>
                                                {{$orderDetail->quantity}}
                                            </div>
                                        </td>
                                        <td class="column-4">
                                            <div class="flex-w flex-sb-m">
                                                <span>{{\App\Helpers\Helper::formatVND($orderDetail->product->price * $orderDetail->quantity)}}</span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            <div class="flex-w flex-sb-m txt-m-103 p-tb-23">
							<span class="size-w-61 cl6">
								Total
							</span>

                                <span class=" cl10">
                                <div>{{\App\Helpers\Helper::formatVND($order->total_price)}} </div>
                                <div><p>~ ${{\App\Helpers\Helper::convertVNDtoUSD($order->total_price)}}</p> </div>
							</span>
                            </div>
                            <div style="justify-content: center" class="flex-w flex-sb-m txt-m-103 mb-2">
                                <p>( Giá dollar hôm nay: $1 = 24 000 <small>VND</small> )</p>
                            </div>

                            @if($order->check_out)
                                <button type="button" style=" border-radius: 20px"
                                        class="flex-c-m txt-s-105 cl0 bg10 size-a-21 hov-btn1 trans-04 p-rl-10">
                                    <a style="color: #FFFFFF;" href="/products">Continue Shopping</a>
                                </button>
                            @else
                                <div class="p-rl-25" id="paypal-button"></div>
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
                        setTimeout(function(){
                            window.location.reload(false);
                        }, 3000);
                    });
            }
        }, '#paypal-button');
    </script>
@endsection

