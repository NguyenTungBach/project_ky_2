@extends('client.master-template')
@section('title')
    <title>Checkout</title>
@endsection
@section('css-page')
    @include('client.page.cart.css')
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
    @include('client.include.title-page',['title'=>'Checkout'])
    <meta name="orderID" content="{{$order->id}}">
    <!-- content page -->
    <div class="bg0 p-t-95">
        <div class="container">

            <div class="row">

                <div class="col-md-7 col-lg-8 p-b-50">
                    @if(session()->has('orderMessage'))
                        <div class=" alert alert-success">{{session()->get('orderMessage')}}</div>
                    @endif
                    @if($order->check_out)
                        <div class=" alert alert-success">Payment success</div>
                    @else
                        <div class="alert alert-danger">Unpaid</div>
                    @endif
                    <div>
                        <h4 class="txt-m-124 cl3 p-b-28">
                            Billing details
                        </h4>

                        @php
                            $total_price_in_usd = 0;
                        @endphp

                        <div class="row p-b-50">
                            <div class="col-sm-6 p-b-23">
                                <div>
                                    <div class="txt-m-104 cl6 p-b-10">
                                        Ship Name:
                                    </div>
                                    <p class="pl-2">{{$order->ship_name}}</p>
                                </div>
                            </div>
                            <div class="col-sm-6 p-b-23">
                                <div>
                                    <div class="txt-m-104 cl6 p-b-10">
                                        Ship Phone:
                                    </div>
                                    <p class="pl-2">{{$order->ship_phone}}</p>
                                </div>
                            </div>
                            <div class="col-sm-6 p-b-23">
                                <div>
                                    <div class="txt-m-104 cl6 p-b-10">
                                        Ship Email:
                                    </div>
                                    <p class="pl-2">{{$order->ship_email}}</p>
                                </div>
                            </div>
                            <div class="col-sm-12 p-b-23">
                                <div>
                                    <div class="txt-m-104 cl6 p-b-10">
                                        Ship Address:
                                    </div>
                                    <p class="pl-2">{{$order->ship_address}}</p>
                                </div>
                            </div>
                            <div class="size-a-38 p-rl-15">
                                <div>
                                    <div class="txt-m-104 cl6 p-b-10">
                                        Ship Note:
                                    </div>
                                    <p class="pl-2">{{$order->ship_note}}</p>
                                </div>
                            </div>
                        </div>
                        {{--                        <a href="/check-mail?orderID={{$order->id}}">Order will send by Mail</a>--}}
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 ">
                    <div class="how-bor4 p-t-35 p-b-20 p-rl-30 ">
                        <h4 class="txt-m-124 cl3 p-b-11">
                            Your order Id {{$order->id}}
                        </h4>

                        <div class="flex-w flex-sb-m txt-m-103 cl6 bo-b-1 bocl15 p-b-21 p-t-18">
							<span>
								Product
							</span>

                            <span>
								Total <small>(VND)</small>
							</span>
                        </div>
                    @foreach($order->orderDetails as $orderDetail)
                        @php
                            if (isset($total_price_in_usd) && isset($orderDetail))
                        @endphp
                        <!--  -->
                            <div class="flex-w flex-sb-m txt-s-101 cl6 bo-b-1 bocl15 p-b-21 p-t-18">
							<span>
                                {{$orderDetail->product->name}} x {{$orderDetail->quantity}}
							</span>


                                <span>
                                <div>{{\App\Helpers\Helper::formatVND($orderDetail->unit_price * $orderDetail->quantity)}} </div>
							</span>
                            </div>
                        @endforeach
                        <div class="flex-w flex-sb-m txt-m-103 bo-b-1 bocl15 p-tb-23">
							<span class="size-w-61 cl6">
								Subtotal
							</span>

                            <span class="cl9">
                                <div>{{\App\Helpers\Helper::formatVND($order->total_price)}}</div>
							</span>
                        </div>

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
                            <p>( Dollar price today: $1 = 24 000 <small>VND</small> )</p>
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
                                >Back to Home</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js-page')
    @include('client.page.cart.js')
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>

    <script>
        var orderID = document.querySelector('meta[name=orderID]').content;
        paypal.Button.render({
            env: 'sandbox', // Or 'production'
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
                        setTimeout(function () {
                            window.location.reload(false); // load lại trang
                        }, 1500);

                    });
            }
        }, '#paypal-button');
    </script>
@endsection

