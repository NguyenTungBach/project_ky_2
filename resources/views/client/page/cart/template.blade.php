@extends('client.master-template')
@section('title')
    <title>Cart</title>
@endsection
@section('css-page')
    @include('client.page.cart.css')
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
                    </tr>

                    <tr class="table_row">
                        <td class="column-1">
                            <div class="flex-w flex-m">
                                <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                    <img src="/client/images/best-sell-01.jpg" alt="IMG">
                                </div>

                                <span>
										Cheery
									</span>
                            </div>
                        </td>
                        <td class="column-2">
                            $ 18.00
                        </td>
                        <td class="column-3">
                            <div class="wrap-num-product flex-w flex-m bg12 p-rl-10">
                                <div class="btn-num-product-down flex-c-m fs-29"></div>

                                <input class="txt-m-102 cl6 txt-center num-product" type="number" name="num-product1"
                                       value="2">

                                <div class="btn-num-product-up flex-c-m fs-16"></div>
                            </div>
                        </td>
                        <td class="column-4">
                            <div class="flex-w flex-sb-m">
									<span>
										36$
									</span>

                                <div class="fs-15 hov-cl10 pointer">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="table_row">
                        <td class="column-1">
                            <div class="flex-w flex-m">
                                <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                    <img src="/client/images/best-sell-02.jpg" alt="IMG">
                                </div>

                                <span>
										Asparagus
									</span>
                            </div>
                        </td>
                        <td class="column-2">
                            $ 12.00
                        </td>
                        <td class="column-3">
                            <div class="wrap-num-product flex-w flex-m bg12 p-rl-10">
                                <div class="btn-num-product-down flex-c-m fs-29"></div>

                                <input class="txt-m-102 cl6 txt-center num-product" type="number" name="num-product2"
                                       value="1">

                                <div class="btn-num-product-up flex-c-m fs-16"></div>
                            </div>
                        </td>
                        <td class="column-4">
                            <div class="flex-w flex-sb-m">
									<span>
										12$
									</span>

                                <div class="fs-15 hov-cl10 pointer">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="w-100 d-flex">
                <div class="w-60  p-t-68">
                    {{-- Form nhập thông tin người nhận tạo tại đây--}}
                </div>
                <div class="w-40 p-t-68">
                    <div class="w-100 pl-3">
                        <p class="txt-m-123 cl3 p-b-18">
                            CART TOTALS
                        </p>
                    </div>

                    <div class="d-flex bo-b-1 bocl15 w-100  p-tb-18">
						<p class="w-50 txt-m-109 cl3">
							Subtotal
						</p>

                        <p class=" w-50 txt-m-104 cl6">
							48$
						</p>
                    </div>

                    <div class="d-flex bo-b-1 bocl15 w-100 p-tb-18">
						<span class="w-50 txt-m-109 cl3">
							Total
						</span>

                        <span class="w-50 txt-m-104 cl10">
							48$
						</span>
                    </div>

                    <div class="dis-flex">
                        <a href="/cart/checkout"
                           class="flex-c-m txt-s-105 cl0 bg10 size-a-34 hov-btn2 trans-04 p-rl-10 m-t-43 mr-3">
                            proceed to checkout
                        </a>
                        <a href="/shop" style="color: #FFF;"
                           class="flex-c-m txt-s-105 cl0 bg11 size-a-34 hov-btn2 trans-04 p-rl-10 m-t-43">
                            Continue Shopping
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
@section('js-page')
    @include('client.page.cart.js')
@endsection
