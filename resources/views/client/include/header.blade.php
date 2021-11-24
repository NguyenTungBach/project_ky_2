<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop">
                <div class="left-header">
                    <!-- Logo desktop -->
                    <div class="logo">
                        <a href="/home"><img src="/client/images/icons/logo-01.png" alt="IMG-LOGO"></a>
                    </div>
                </div>

                <div class="center-header">
                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="/home">Home</a>
                            </li>

                            <li>
                                <a href="/products">Shop</a>
                            </li>

                            <li>
                                <a href="/farm">Farm</a>
                            </li>

                            <li>
                                <a href="/about">About Us</a>
                            </li>

                            <li>
                                <a href="/blog">Blog</a>
                            </li>


                            <li>
                                <a href="/contact">Contact</a>
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
                        <div class="wrap-cart-header h-full flex-m m-l-10 menu-click">
                            <div class="icon-header-item flex-c-m trans-04 icon-header-noti" data-notify="{{isset($shopCart) ? sizeof($shopCart) : ''}}">
                                <img src="/client/images/icons/icon-cart-2.png" alt="CART">
                            </div>

                            <div class="cart-header menu-click-child trans-04">
                                <div class="bo-b-1 bocl15">
                                    <div class="size-h-2 js-pscroll m-r--15 p-r-15">
                                    @if(session()->has('shoppingCart'))
                                        <?php $total = 0 ?>
                                        @foreach($shopCart as $product)
                                            @php
                                                if (isset($product)) {
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
											{{$product->unitPrice}} <small>VND</small>
										</span>

                                                            <span class="txt-s-109 cl12">
											x{{$product->quantity}}
										</span>
                                                        </div>
                                                    </div>

                                                    <div class="size-w-14 flex-b">
                                                        <a href="/cart/delete/{{$product->id}}" style="position: absolute;top: 0;" class="lh-10">
                                                            <img src="/client/images/icons/icon-close.png" alt="CLOSE">
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="flex-w flex-sb-m p-b-31 mt-4">
                                        <span class="txt-m-103 cl3 p-r-20">
											Total
										</span>

                                    <span class="txt-m-111 cl10">
											{{ isset($total) ? number_format($total, 0, ',', ' ') : ''}} <small>VND</small>
										</span>
                                </div>

                                <a href="/cart/show" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
                                    Check out
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
            <a href="index.html"><img src="/client/images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click m-r-15">

            <div class="wrap-cart-header h-full flex-m m-l-5 menu-click">
                <div class="icon-header-item flex-c-m trans-04 icon-header-noti" data-notify="2">
                    <img src="/client/images/icons/icon-cart-2.png" alt="CART">
                </div>
                {{--Shop cart--}}
                <div class="cart-header menu-click-child trans-04" style="right: 20px">
                    <div class="bo-b-1 bocl15">
                        <div class="size-h-2 js-pscroll m-r--15 p-r-15">
                        @if(session()->has('cart'))
                            @php
                                $shopCart = session()->get('cart');

                            @endphp
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
											{{$product->unitPrice}} <small>VND</small>
										</span>

                                                <span class="txt-s-109 cl12">
											x{{$product->quantity}}
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
                            @endif

                        </div>
                    </div>

                    <div class="flex-w flex-sb-m p-b-31">
                            <span class="txt-m-103 cl3 p-r-20">
								Total
							</span>

                        <span class="txt-m-111 cl10">
								48$
							</span>
                    </div>

                    <a href="/checkout" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
                        check out
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
                <a href="index.html">Home</a>
                <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
            </li>

            <li>
                <a href="shop-sidebar-grid.html">Shop</a>
                <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
            </li>

            <li>
                <a href="gallery-01.html">Gallery</a>
                <ul class="sub-menu-m">
                    <li><a href="gallery-01.html">Gallery 1</a></li>
                    <li><a href="gallery-02.html">Gallery 2</a></li>
                </ul>

                <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
            </li>

            <li>
                <a href="#">About Us</a>
                <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
            </li>


            <li>
                <a href="blog-list.html">Blog</a>
                <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
            </li>

            <li>
                <a href="contact-01.html">Contact</a>
                <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
            </li>
        </ul>
    </div>

</header>
