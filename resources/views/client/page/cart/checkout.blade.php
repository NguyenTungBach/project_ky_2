@extends('client.master-template')
@section('title')
    <title>Checkout</title>
@endsection
@section('css-page')
    @include('client.page.cart.css')
@endsection
@section('content-page')
    <!-- Title page -->
    @include('client.include.title-page',['title'=>'Checkout'])
    <meta name="orderID" content="{{$order->id}}">
    <!-- content page -->
    <div class="bg0 p-t-95 p-b-50">
        <div class="container">
            @if($order->check_out)
                <strong class="cl10">Đã thanh toán</strong>
            @else
                <strong class="cl12">Chưa thanh toán</strong>
            @endif
            <div class="row">
                <div class="col-md-7 col-lg-8 p-b-50">
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
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Ship Name
                                    </div>
                                    {{$order->ship_name}}
                                </div>
                            </div>
                            <div class="col-sm-6 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Ship Phone
                                    </div>
                                    {{$order->ship_phone}}
                                </div>
                            </div>
                            <div class="col-sm-6 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Ship Email
                                    </div>
                                    {{$order->ship_email}}
                                </div>
                            </div>
                            <div class="col-sm-12 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Ship Address
                                    </div>
                                    {{$order->ship_address}}
                                </div>
                            </div>
                            <div class="size-a-38 p-rl-15">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Ship Note
                                    </div>
                                    {{$order->ship_note}}
                                </div>
                            </div>
                        </div>
                        <a href="/check-mail?orderID={{$order->id}}">Order will send by Mail</a>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 p-b-50">
                    <div class="how-bor4 p-t-35 p-b-40 p-rl-30 m-t-5">
                        <h4 class="txt-m-124 cl3 p-b-11">
                            Your order Id {{$order->id}}
                        </h4>

                        <div class="flex-w flex-sb-m txt-m-103 cl6 bo-b-1 bocl15 p-b-21 p-t-18">
							<span>
								Product
							</span>

                            <span>
								Total
							</span>
                        </div>
                        @foreach($order->orderDetails as $orderDetail)
                            @php
                                if (isset($total_price_in_usd) && isset($orderDetail))
                                $total_price_in_usd += \App\Helpers\Helper::convertVNDtoUSD($orderDetail->unit_price) * $orderDetail->quantity;
                            @endphp
                        <!--  -->
                        <div class="flex-w flex-sb-m txt-s-101 cl6 bo-b-1 bocl15 p-b-21 p-t-18">
							<span>
                                {{$orderDetail->product->name}} x {{$orderDetail->quantity}}
							</span>


                            <span>
                                <div>{{$orderDetail->unit_price * $orderDetail->quantity}} VND</div>
								~ {{\App\Helpers\Helper::convertVNDtoUSD($orderDetail->unit_price) * $orderDetail->quantity}} $
							</span>
                        </div>
                        @endforeach
                        <!--  -->
{{--                        <div class="flex-w flex-m txt-m-103 bo-b-1 bocl15 p-tb-23">--}}
                        <div class="flex-w flex-sb-m txt-m-103 bo-b-1 bocl15 p-tb-23">
							<span class="size-w-61 cl6">
								Subtotal
							</span>

{{--                            <span class="size-w-62 cl9">--}}
                            <span class="cl9">
{{--								48$--}}
                                <div>{{$order->total_price}} VND</div>
                                 ~ {{$total_price_in_usd}} $
							</span>
                        </div>

{{--                        <div class="flex-w flex-m txt-m-103 p-tb-23">--}}
                        <div class="flex-w flex-sb-m txt-m-103 p-tb-23">
							<span class="size-w-61 cl6">
								Total
							</span>

{{--                            <span class="size-w-62 cl10">--}}
                            <span class=" cl10">
{{--								48$--}}
                                <div>{{$order->total_price}} VND</div>
                                ~ {{$total_price_in_usd}} $
							</span>
                        </div>
                        <div class="flex-w flex-sb-m txt-m-103 p-tb-23">
							<span class="size-w-61 cl6">

							</span>

                            <span class="cl10">
{{--								48$--}}
                                ($1 = 24000 VND)
							</span>
                        </div>

                        @if($order->check_out)
                            <button type="button" class="flex-c-m txt-s-105 cl0 bg10 size-a-21 hov-btn2 trans-04 p-rl-10">
                                <a href="/products">Continue Shopping</a>
                            </button>
                        @else
                            <div class="p-rl-25" id="paypal-button"></div>
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
        var orderID= document.querySelector('meta[name=orderID]').content;
        paypal.Button.render({
            env: 'sandbox', // Or 'production'
            locale: 'en_US',
            style: {
                size: 'medium',
                color: 'gold',
                shape: 'pill',
                label: 'checkout',
                tagline: 'true'
            },
            // Set up the payment:
            // 1. Add a payment callback
            payment: function(data, actions) {
                // 2. Make a request to your server
                return actions.request.post('/order/create-payment',{
                    {{--orderID: {{$order->id}}--}}
                    orderID: orderID
                })
                    .then(function(res) {
                        // 3. Return res.id from the response
                        return res.id;
                    });
            },
            // Execute the payment:
            // 1. Add an onAuthorize callback
            onAuthorize: function(data, actions) {
                // 2. Make a request to your server
                return actions.request.post('/order/execute-payment', {
                    paymentID: data.paymentID,
                    payerID:   data.payerID,
                    orderID: orderID,
                })
                    .then(function(res) {
                        // 3. Show the buyer a confirmation message.
                        alert('Payment success!');
                        window.location.reload(false); // load lại trang
                    });
            }
        }, '#paypal-button');
    </script>
@endsection

