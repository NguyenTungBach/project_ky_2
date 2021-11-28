@extends('client.master-template')
@section('title')
    <title>Product detail</title>
@endsection
@section('css-page')
    @include('client.page.product.css')
    <style>
        .thumbnail-custom {
            border: 1px solid #000;
            width: 500px;
            height: 500px;
            object-fit: cover;
            object-position: 100% 0
        }
    </style>
@endsection
@section('content-page')
    <!-- Title page -->
    @include('client.include.title-page',['title'=>'Product detail'])

    <!-- Product detail -->
    <section class="sec-product-detail bg0 p-t-105 p-b-70">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-6">
                    <div class="colmd-12">
                        <img src="{{$items->firstImage}}" class="thumbnail-custom" alt="">
                    </div>
                </div>

                <div class="col-md-5 col-lg-6">
                    <div class=" p-t-35 p-l-0-lg">
                        <h4 class="js-name1 txt-l-104 cl3 p-b-16">
                            {{$items->name}}
                        </h4>

                        <span class="txt-m-117 cl9">
							{{$items->formatPrice}} <small>VND</small>
						</span>
                        <p class="txt-s-101 cl6">
                            {{$items->description}}
                        </p>

                        <div class="flex-w flex-m p-t-55 p-b-30">
                            <div class="wrap-num-product flex-w flex-m bg12 p-rl-10 m-r-30 m-b-30">
                                <div class="btn-num-product-down flex-c-m fs-29"></div>

                                <input class="txt-m-102 cl6 txt-center num-product" type="number" name="num-product"
                                       value="1">

                                <div class="btn-num-product-up flex-c-m fs-16"></div>
                            </div>

                            <button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 m-b-30 js-addcart1">
                                Add to cart
                            </button>
                        </div>


                        <div class="txt-s-107 p-b-6">
							<span class="cl6">
								Danh mục:
							</span>

                            <span class="cl9">
								{{$items->category->name}}
							</span>
                        </div>

                        <div class="txt-s-107 p-b-6">
							<span class="cl6">
								Tải xuống:
							</span>

                            <span class="cl9">

							</span>
                        </div>

                    </div>
                </div>
            </div>


            <!-- Tab01 -->
            <div class="p-t-80">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" style="cursor: pointer" onclick="openDetailAndReview('detail-product')">Thông
                            tin chi tiết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="cursor: pointer" onclick="openDetailAndReview('review-product')">Bình
                            luận</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div>
                    <div id="detail-product" style="display: block; " class="reviewAndDetail"><br>
                        {!! $items->detail !!}
                    </div>
                    <div id="review-product" style="display: none;" class=" reviewAndDetail"><br>
                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam.</p>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <!-- Related product -->
    <section class="sec-related bg0 p-b-85">
        <div class="container">
            <!-- slide9 -->
            <div class="wrap-slick9">
                <div class="flex-w flex-sb-m p-b-33 p-rl-15">
                    <h3 class="txt-l-112 cl3 m-r-20 respon1 p-tb-15">
                        đã xem gần đây
                    </h3>

                    <div class="wrap-arrow-slick9 flex-w m-t-6"></div>
                </div>

                <div class="slick9">
                    <!-- - -->
                    <div class="item-slick9 p-all-15">
                        <!-- Block1 -->
                        <div class="block1">
                            <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                <img src="/client/images/product-02.jpg" alt="IMG">

                                <div class="block1-content flex-col-c-m p-b-46">
                                    <a href="product-single.html"
                                       class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                        Strawberry
                                    </a>

                                    <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
										23$
									</span>

                                    <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                        <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                            <img src="/client/images/icons/icon-view.png" alt="ICON">
                                        </a>

                                        <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                            <img src="/client/images/icons/icon-cart.png" alt="ICON">
                                        </a>

                                        <a href="wishlist.html"
                                           class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                            <img class="icon-addwish-b1" src="/client/images/icons/icon-heart.png"
                                                 alt="ICON">
                                            <img class="icon-addedwish-b1" src="/client/images/icons/icon-heart2.png"
                                                 alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- - -->
                    <div class="item-slick9 p-all-15">
                        <!-- Block1 -->
                        <div class="block1">
                            <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                <img src="/client/images/product-03.jpg" alt="IMG">

                                <div class="block1-content flex-col-c-m p-b-46">
                                    <a href="product-single.html"
                                       class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                        Cauliflower
                                    </a>

                                    <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
										19$
									</span>

                                    <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                        <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                            <img src="/client/images/icons/icon-view.png" alt="ICON">
                                        </a>

                                        <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                            <img src="/client/images/icons/icon-cart.png" alt="ICON">
                                        </a>

                                        <a href="wishlist.html"
                                           class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                            <img class="icon-addwish-b1" src="/client/images/icons/icon-heart.png"
                                                 alt="ICON">
                                            <img class="icon-addedwish-b1" src="/client/images/icons/icon-heart2.png"
                                                 alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- - -->
                    <div class="item-slick9 p-all-15">
                        <!-- Block1 -->
                        <div class="block1">
                            <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                <img src="/client/images/product-04.jpg" alt="IMG">

                                <div class="block1-content flex-col-c-m p-b-46">
                                    <a href="product-single.html"
                                       class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                        Vegetable
                                    </a>

                                    <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
										22$
									</span>

                                    <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                        <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                            <img src="/client/images/icons/icon-view.png" alt="ICON">
                                        </a>

                                        <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                            <img src="/client/images/icons/icon-cart.png" alt="ICON">
                                        </a>

                                        <a href="wishlist.html"
                                           class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                            <img class="icon-addwish-b1" src="/client/images/icons/icon-heart.png"
                                                 alt="ICON">
                                            <img class="icon-addedwish-b1" src="/client/images/icons/icon-heart2.png"
                                                 alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- - -->
                    <div class="item-slick9 p-all-15">
                        <!-- Block1 -->
                        <div class="block1">
                            <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                <img src="/client/images/product-05.jpg" alt="IMG">

                                <div class="block1-content flex-col-c-m p-b-46">
                                    <a href="product-single.html"
                                       class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                        Bell pepper
                                    </a>

                                    <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
										12$
									</span>

                                    <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                        <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                            <img src="/client/images/icons/icon-view.png" alt="ICON">
                                        </a>

                                        <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                            <img src="/client/images/icons/icon-cart.png" alt="ICON">
                                        </a>

                                        <a href="wishlist.html"
                                           class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                            <img class="icon-addwish-b1" src="/client/images/icons/icon-heart.png"
                                                 alt="ICON">
                                            <img class="icon-addedwish-b1" src="/client/images/icons/icon-heart2.png"
                                                 alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- - -->
                    <div class="item-slick9 p-all-15">
                        <!-- Block1 -->
                        <div class="block1">
                            <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                <img src="/client/images/product-06.jpg" alt="IMG">

                                <div class="block1-content flex-col-c-m p-b-46">
                                    <a href="product-single.html"
                                       class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                        Beetroot
                                    </a>

                                    <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
										9$
									</span>

                                    <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                        <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                            <img src="/client/images/icons/icon-view.png" alt="ICON">
                                        </a>

                                        <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                            <img src="/client/images/icons/icon-cart.png" alt="ICON">
                                        </a>

                                        <a href="wishlist.html"
                                           class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                            <img class="icon-addwish-b1" src="/client/images/icons/icon-heart.png"
                                                 alt="ICON">
                                            <img class="icon-addedwish-b1" src="/client/images/icons/icon-heart2.png"
                                                 alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  -->
                    <div class="item-slick9 p-all-15">
                        <!-- Block1 -->
                        <div class="block1">
                            <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                <img src="/client/images/product-07.jpg" alt="IMG">

                                <div class="block1-content flex-col-c-m p-b-46">
                                    <a href="product-single.html"
                                       class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                        Cabbage
                                    </a>

                                    <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
										15$
									</span>

                                    <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                        <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                            <img src="/client/images/icons/icon-view.png" alt="ICON">
                                        </a>

                                        <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                            <img src="/client/images/icons/icon-cart.png" alt="ICON">
                                        </a>

                                        <a href="wishlist.html"
                                           class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                            <img class="icon-addwish-b1" src="/client/images/icons/icon-heart.png"
                                                 alt="ICON">
                                            <img class="icon-addedwish-b1" src="/client/images/icons/icon-heart2.png"
                                                 alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- - -->
                    <div class="item-slick9 p-all-15">
                        <!-- Block1 -->
                        <div class="block1">
                            <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                <img src="/client/images/product-08.jpg" alt="IMG">

                                <div class="block1-content flex-col-c-m p-b-46">
                                    <a href="product-single.html"
                                       class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                        Tomato
                                    </a>

                                    <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
										38$
									</span>

                                    <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                        <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                            <img src="/client/images/icons/icon-view.png" alt="ICON">
                                        </a>

                                        <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                            <img src="/client/images/icons/icon-cart.png" alt="ICON">
                                        </a>

                                        <a href="wishlist.html"
                                           class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                            <img class="icon-addwish-b1" src="/client/images/icons/icon-heart.png"
                                                 alt="ICON">
                                            <img class="icon-addedwish-b1" src="/client/images/icons/icon-heart2.png"
                                                 alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- - -->
                    <div class="item-slick9 p-all-15">
                        <!-- Block1 -->
                        <div class="block1">
                            <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                <img src="/client/images/product-01.jpg" alt="IMG">

                                <div class="block1-content flex-col-c-m p-b-46">
                                    <a href="product-single.html"
                                       class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                        Red pumpkin
                                    </a>

                                    <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
										21$
									</span>

                                    <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                        <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                            <img src="/client/images/icons/icon-view.png" alt="ICON">
                                        </a>

                                        <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                            <img src="/client/images/icons/icon-cart.png" alt="ICON">
                                        </a>

                                        <a href="wishlist.html"
                                           class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                            <img class="icon-addwish-b1" src="/client/images/icons/icon-heart.png"
                                                 alt="ICON">
                                            <img class="icon-addedwish-b1" src="/client/images/icons/icon-heart2.png"
                                                 alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- - -->
                    <div class="item-slick9 p-all-15">
                        <!-- Block1 -->
                        <div class="block1">
                            <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                <img src="/client/images/product-33.jpg" alt="IMG">

                                <div class="block1-content flex-col-c-m p-b-46">
                                    <a href="product-single.html"
                                       class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                        Cabbage
                                    </a>

                                    <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
										8$
									</span>

                                    <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                        <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                            <img src="/client/images/icons/icon-view.png" alt="ICON">
                                        </a>

                                        <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                            <img src="/client/images/icons/icon-cart.png" alt="ICON">
                                        </a>

                                        <a href="wishlist.html"
                                           class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                            <img class="icon-addwish-b1" src="/client/images/icons/icon-heart.png"
                                                 alt="ICON">
                                            <img class="icon-addedwish-b1" src="/client/images/icons/icon-heart2.png"
                                                 alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js-page')
    @include('client.page.product.js')
    <script>
        function openDetailAndReview(reviewOrDetail) {
            var x = document.getElementsByClassName('reviewAndDetail')
            for (var i = 0; i < x.length; i++) {
                x[i].style.display = 'none';
            }
            document.getElementById(reviewOrDetail).style.display = 'block';
        }
    </script>
@endsection

