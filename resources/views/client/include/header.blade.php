<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    #account a:hover {
        color: black;
    }

    .cart-header {
        top: 75%;
        right: 20px;
    }

    #menu-user {
        display: none;
        position: absolute;
        z-index: 1200;
        right: 20px;
        top: 75%;
        width: 244px;
        background: #fff;
        padding: 20px 20px;

        box-shadow: 0 0px 7px 0px rgb(0 0 0 / 10%);
        -moz-box-shadow: 0 0px 7px 0px rgba(0, 0, 0, 0.1);
        -webkit-box-shadow: 0 0px 7px 0px rgb(0 0 0 / 10%);
        -o-box-shadow: 0 0px 7px 0px rgba(0, 0, 0, 0.1);

    }

    #user:hover #menu-user {
        display: block;
    }
    #menu-user ul a {
        color: #000 ;

    }
    #menu-user ul a li{
       padding: 4px 2px;
    }
    #menu-user ul a:hover li{
        background-color: #8db263;
        color: #FFF;
    }
</style>
<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop">
                <div class="left-header">
                    <!-- Logo desktop -->
                    <div class="logo">
                        <a href="/"><img src="/client/images/icons/favicon-no-background.png" alt="IMG-LOGO"></a>
                    </div>
                </div>

                <div class="center-header">
                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="/">Trang chủ</a>
                            </li>

                            <li>
                                <a href="/products">Sản phẩm</a>
                            </li>

                            <li>
                                <a href="/farm">Trang Trại</a>
                            </li>

                            <li>
                                <a href="/about">Giới thiệu Công ty</a>
                            </li>

                            <li>
                                <a href="/blog">Bài viết</a>
                            </li>


                            <li>
                                <a href="/contact">Phản hồi</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="right-header">
                @php
                    if (session()->has('shoppingCart')){
                        $shopCart = session()->get('shoppingCart');
                    }
                @endphp
                <!-- Icon header -->

                    <div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click p-t-8">
                        <div class="wrap-cart-header h-full flex-m m-l-10 ">
                            <div class="icon-header-item flex-c-m trans-04" id="user">
                                <img style="width: 20px;" src="/client/images/icons/User.png" alt="CART">
                            </div>
                            <div class="trans-04" id="menu-user">
                                <ul>
                                    @if(session()->has('loginUserId'))
                                        <a href="/user/login">
                                            <li><i class="fa fa-info-circle mr-2"></i>Thông tin cá nhân</li>
                                        </a>
                                        <a href="">
                                            <li><i class="fa fa-list mr-2"></i>Danh sách đơn hàng đã đặt hàng</li>
                                        </a>
                                    @else
                                        <a href="/user/login">
                                            <li><i class="fa fa-sign-out mr-2"></i>Đăng kí tài khoản</li>
                                        </a>
                                        <a href="">
                                            <li><i class="fa fa-sign-in mr-2"></i>Đăng nhập</li>
                                        </a>
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click p-t-8">
                        <div class="wrap-cart-header h-full flex-m m-l-10 menu-click">
                            <div class="icon-header-item flex-c-m trans-04 icon-header-noti"
                                 data-notify="{{isset($shopCart) ? sizeof($shopCart) : ''}}">
                                <img src="/client/images/icons/icon-cart-2.png" alt="CART">
                            </div>
                            <div class="cart-header menu-click-child trans-04">
                                <div class="bo-b-1 bocl15">
                                    <div class="size-h-2 js-pscroll m-r--15 p-r-15" id="cart-header">
                                    @if(session()->has('shoppingCart'))
                                        <?php $total = 0 ?>
                                        @foreach($shopCart as $product)
                                            @php
                                                if (isset($product) && isset($total)) {
                                                    $total += $product->unitPrice * $product->quantity;
                                                }
                                            @endphp
                                            <!-- cart header item -->
                                                <div class="flex-w flex-str m-b-25 " style="position: relative">
                                                    <div class="size-w-15 flex-w flex-t">
                                                        <a href="product-single.html"
                                                           class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                                                            <img src="{{$product->thumbnail}}" alt="PRODUCT">
                                                        </a>

                                                        <div class="size-w-17 flex-col-l">
                                                            <a href="product-single.html"
                                                               class="txt-s-108 cl3 hov-cl10 trans-04">
                                                                {{$product->name}}
                                                            </a>

                                                            <span class="txt-s-101 cl9">
											 {{number_format($product->unitPrice)}} <small>VND</small>
										</span>

                                                            <span class="txt-s-109 cl12">
											x{{$product->quantity}}
										</span>
                                                        </div>
                                                    </div>

                                                    {{--                                                    <div class="size-w-14 flex-b">--}}
                                                    {{--                                                        <a href="/cart/delete/{{$product->id}}" style="position: absolute;top: 0;" class="lh-10">--}}
                                                    {{--                                                            <img src="/client/images/icons/icon-close.png" alt="CLOSE">--}}
                                                    {{--                                                        </a>--}}
                                                    {{--                                                    </div>--}}
                                                </div>
                                            @endforeach
                                        @else
                                            <div></div>
                                        @endif
                                    </div>
                                </div>
                                <div class="flex-w flex-sb-m p-b-31 mt-4">
                                        <span class="txt-m-103 cl3 p-r-20">
											Tổng tiền
										</span>

                                    <span class="txt-m-111 cl10" id="total-cart">
											<p>{{ isset($total) ? number_format($total) : ''}} <small>VND</small></p>
										</span>
                                </div>

                                <a href="/cart" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
                                    Giỏ hàng
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="index.html"><img src="/client/images/icons/favicon-no-background.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click m-r-15">
            @php
                if (session()->has('shoppingCart')){
                $shopCart = session()->get('shoppingCart');
                }
            @endphp
            <div class="wrap-cart-header h-full flex-m m-l-5 menu-click">
                <div class="icon-header-item flex-c-m trans-04 icon-header-noti"
                     data-notify="{{isset($shopCart) ? sizeof($shopCart) : ''}}">
                    <img src="/client/images/icons/icon-cart-2.png" alt="CART">
                    <div>
                        <i class="far fa-user-circle"><a href="$"></a></i>
                    </div>
                </div>
                {{--Shop cart--}}
                <div class="cart-header menu-click-child trans-04" style="right: 20px">
                    <div class="bo-b-1 bocl15">
                        <div class="size-h-2 js-pscroll m-r--15 p-r-15">
                        @if(session()->has('shoppingCart'))
                            <?php $total = 0 ?>
                            @foreach($shopCart as $product)
                                <!-- cart header item -->
                                    <div class="flex-w flex-str m-b-25 " style="position: relative">
                                        <div class="size-w-15 flex-w flex-t">
                                            <a href="product-single.html"
                                               class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                                                <img src="{{$product->thumbnail}}" alt="PRODUCT">
                                            </a>

                                            <div class="size-w-17 flex-col-l">
                                                <a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
                                                    {{$product->name}}
                                                </a>

                                                <span class="txt-s-101 cl9">
											{{number_format($product->unitPrice)}} <small>VND</small>
										</span>

                                                <span class="txt-s-109 cl12">
											{{$product->quantity}}
										</span>
                                            </div>
                                        </div>

                                        <div class="size-w-14 flex-b">
                                            <button style="position: absolute;top: 0;" class="lh-10">
                                                <img src="/client/images/icons/icon-close.png" alt="CLOSE">
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div></div>
                            @endif
                        </div>
                    </div>

                    <div class="flex-w flex-sb-m p-b-31">
                            <span class="txt-m-103 cl3 p-r-20">
								Tổng tiền
							</span>

                        <span class="txt-m-111 cl10">
								{{ isset($total) ? number_format($total) : ''}} <small>VND</small>
							</span>
                    </div>

                    <a href="/cart" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
                        Giỏ hàng
                    </a>
                </div>
            </div>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
					<span class="hamburger-inner"></span>
                </span>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li>
                <a href="/">Trang chủ</a>
            </li>

            <li>
                <a href="/products">Sản phẩm</a>
            </li>

            <li>
                <a href="/farm">Trang Trại</a>
            </li>

            <li>
                <a href="/about">Giới thiệu Công ty</a>
            </li>

            <li>
                <a href="/blog">Bài viết</a>
            </li>


            <li>
                <a href="/contact">Phản hồi</a>
            </li>
        </ul>
    </div>

</header>
