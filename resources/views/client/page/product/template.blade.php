@extends('client.master-template')
@section('title')
    <title>Product</title>
@endsection
@section('css-page')
    @include('client.page.product.css')
@endsection
@section('content-page')
    <!-- Title page -->
    @include('client.include.title-page',['title'=>'Product'])

    <section class="bg0 p-t-85 p-b-45">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-4 col-lg-3 m-rl-auto p-b-50">
                    <div class="leftbar p-t-15">
                        <!--  -->
                        <div class="size-a-21 pos-relative">
                            <input class="s-full bo-all-1 bocl15 p-rl-20" type="text" name="search"
                                   placeholder="Search products...">
                            <button class="flex-c-m fs-18 size-a-22 ab-t-r hov11">
                                <img class="hov11-child trans-04" src="/client/images/icons/icon-search.png" alt="ICON">
                            </button>
                        </div>

                        <!--  -->
                        <div class="p-t-45">
                            <h4 class="txt-m-101 cl3">
                                FILTER BY PRICE
                            </h4>

                            <div class="filter-price p-t-32">
                                <div class="wra-filter-bar">
                                    <div id="filter-bar"></div>
                                </div>

                                <div class="flex-sb-m flex-w p-t-16">
                                    <div class="txt-s-115 cl9 p-t-10 p-b-10 m-r-20">
                                        Price: $<span id="value-lower">8</span> - $<span id="value-upper">20</span>
                                    </div>

                                    <div>
                                        <a href="#" class="txt-s-107 cl6 hov-cl10 trans-04">
                                            Filter
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  -->
                        <div class="p-t-40">
                            <h4 class="txt-m-101 cl3 p-b-37">
                                Categories
                            </h4>

                            <ul>
                                <li class="p-b-5">
                                    <a href="#" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
                                        <span class="m-r-10">Vegetable</span>
                                        <span>3</span>
                                    </a>
                                </li>

                                <li class="p-b-5">
                                    <a href="#" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
                                        <span class="m-r-10">Fruit</span>
                                        <span>5</span>
                                    </a>
                                </li>

                                <li class="p-b-5">
                                    <a href="#" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
                                        <span class="m-r-10">Fruit Juic</span>
                                        <span>9</span>
                                    </a>
                                </li>

                                <li class="p-b-5">
                                    <a href="#" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
                                        <span class="m-r-10">Dried</span>
                                        <span>9</span>
                                    </a>
                                </li>

                                <li class="p-b-5">
                                    <a href="#" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
                                        <span class="m-r-10">Other</span>
                                        <span>2</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!--  -->
                        <div class="p-t-40">
                            <h4 class="txt-m-101 cl3 p-b-37">
                                Best sellers
                            </h4>

                            <ul>
                                <li class="flex-w flex-sb-t p-b-30">
                                    <a href="#" class="size-w-50 wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="/client/images/best-sell-01.jpg" alt="IMG">
                                    </a>

                                    <div class="size-w-51 flex-col-l p-t-12">
                                        <a href="#" class="txt-m-103 cl3 hov-cl10 trans-04 p-b-12">
                                            Cheery
                                        </a>

                                        <span class="txt-m-104 cl9">
											30$
										</span>
                                    </div>
                                </li>

                                <li class="flex-w flex-sb-t p-b-30">
                                    <a href="#" class="size-w-50 wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="/client/images/best-sell-02.jpg" alt="IMG">
                                    </a>

                                    <div class="size-w-51 flex-col-l p-t-12">
                                        <a href="#" class="txt-m-103 cl3 hov-cl10 trans-04 p-b-12">
                                            Asparagus
                                        </a>

                                        <span class="txt-m-104 cl9">
											12$
										</span>
                                    </div>
                                </li>

                                <li class="flex-w flex-sb-t p-b-30">
                                    <a href="#" class="size-w-50 wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="/client/images/best-sell-03.jpg" alt="IMG">
                                    </a>

                                    <div class="size-w-51 flex-col-l p-t-12">
                                        <a href="#" class="txt-m-103 cl3 hov-cl10 trans-04 p-b-12">
                                            Eggplant
                                        </a>

                                        <span class="txt-m-104 cl9">
											18$
										</span>
                                    </div>
                                </li>

                                <li class="flex-w flex-sb-t p-b-30">
                                    <a href="#" class="size-w-50 wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="/client/images/best-sell-04.jpg" alt="IMG">
                                    </a>

                                    <div class="size-w-51 flex-col-l p-t-12">
                                        <a href="#" class="txt-m-103 cl3 hov-cl10 trans-04 p-b-12">
                                            Carrot
                                        </a>

                                        <span class="txt-m-104 cl9">
											17$
										</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!--  -->
                        <div class="p-t-25">
                            <h4 class="txt-m-101 cl3 p-b-37">
                                Search by tags
                            </h4>

                            <div class="flex-w m-r--10">
                                <a href="#"
                                   class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                    Food
                                </a>

                                <a href="#"
                                   class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                    Green
                                </a>

                                <a href="#"
                                   class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                    Vegetables
                                </a>

                                <a href="#"
                                   class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                    Organic
                                </a>

                                <a href="#"
                                   class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                    Farm
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-9 m-rl-auto p-b-50">
                    <div>
                        <div class="flex-w flex-r-m p-b-45 flex-row-rev">
                            <div class="flex-w flex-m p-tb-8">
                                <div class="rs1-select2 bg0 size-w-52 bo-all-1 bocl15 m-tb-7 m-r-15">
                                    <select class="js-select2" name="sort">
                                        <option>Sort by popularity</option>
                                        <option>Sort by best sell</option>
                                        <option>Sort by special</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>

                                <div class="flex-w flex-m m-tb-7">
                                    <button class="dis-block lh-00 pos-relative how-icon1 m-r-15 js-show-list">
                                        <img class="icon-main trans-04" src="/client/images/icons/icon-menu-list.png" alt="ICON">
                                        <img class="ab-t-l icon-hov trans-04" src="/client/images/icons/icon-menu-list1.png"
                                             alt="ICON">
                                    </button>

                                    <button class="dis-block lh-00 pos-relative how-icon1 menu-active js-show-grid">
                                        <img class="icon-main trans-04" src="/client/images/icons/icon-grid.png" alt="ICON">
                                        <img class="ab-t-l icon-hov trans-04" src="/client/images/icons/icon-grid1.png" alt="ICON">
                                    </button>
                                </div>
                            </div>

                            <span class="txt-s-101 cl9 m-r-30 size-w-53">
								Showing 1–12 of 23 results
							</span>
                        </div>

                        <!-- Shop grid -->
                        <div class="shop-grid">
                            <div class="row">
                                <!-- - -->
                                <div class="col-sm-6 col-lg-4 p-b-30">
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
                                                    <a href="product-single.html"
                                                       class="block1-icon flex-c-m wrap-pic-max-w">
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
                                <div class="col-sm-6 col-lg-4 p-b-30">
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
                                                    <a href="product-single.html"
                                                       class="block1-icon flex-c-m wrap-pic-max-w">
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
                                <div class="col-sm-6 col-lg-4 p-b-30">
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
                                                    <a href="product-single.html"
                                                       class="block1-icon flex-c-m wrap-pic-max-w">
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
                                <div class="col-sm-6 col-lg-4 p-b-30">
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
                                                    <a href="product-single.html"
                                                       class="block1-icon flex-c-m wrap-pic-max-w">
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
                                <div class="col-sm-6 col-lg-4 p-b-30">
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
                                                    <a href="product-single.html"
                                                       class="block1-icon flex-c-m wrap-pic-max-w">
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
                                <div class="col-sm-6 col-lg-4 p-b-30">
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
                                                    <a href="product-single.html"
                                                       class="block1-icon flex-c-m wrap-pic-max-w">
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
                                <div class="col-sm-6 col-lg-4 p-b-30">
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
                                                    <a href="product-single.html"
                                                       class="block1-icon flex-c-m wrap-pic-max-w">
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
                                <div class="col-sm-6 col-lg-4 p-b-30">
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
                                                    <a href="product-single.html"
                                                       class="block1-icon flex-c-m wrap-pic-max-w">
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
                                <div class="col-sm-6 col-lg-4 p-b-30">
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
                                                    <a href="product-single.html"
                                                       class="block1-icon flex-c-m wrap-pic-max-w">
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
                                <div class="col-sm-6 col-lg-4 p-b-30">
                                    <!-- Block1 -->
                                    <div class="block1">
                                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                            <img src="/client/images/product-34.jpg" alt="IMG">

                                            <div class="block1-content flex-col-c-m p-b-46">
                                                <a href="product-single.html"
                                                   class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                                    Peas
                                                </a>

                                                <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
													38$
												</span>

                                                <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                                    <a href="product-single.html"
                                                       class="block1-icon flex-c-m wrap-pic-max-w">
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
                                <div class="col-sm-6 col-lg-4 p-b-30">
                                    <!-- Block1 -->
                                    <div class="block1">
                                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                            <img src="/client/images/product-35.jpg" alt="IMG">

                                            <div class="block1-content flex-col-c-m p-b-46">
                                                <a href="product-single.html"
                                                   class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                                    Orange
                                                </a>

                                                <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
													38$
												</span>

                                                <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                                    <a href="product-single.html"
                                                       class="block1-icon flex-c-m wrap-pic-max-w">
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
                                <div class="col-sm-6 col-lg-4 p-b-30">
                                    <!-- Block1 -->
                                    <div class="block1">
                                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                            <img src="/client/images/product-36.jpg" alt="IMG">

                                            <div class="block1-content flex-col-c-m p-b-46">
                                                <a href="product-single.html"
                                                   class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                                    Onion
                                                </a>

                                                <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
													28$
												</span>

                                                <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                                    <a href="product-single.html"
                                                       class="block1-icon flex-c-m wrap-pic-max-w">
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

                        <!-- Shop list -->
                        <div class="shop-list dis-none">
                            <div class="row p-b-30">
                                <div class=" col-sm-5 col-lg-4">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="/client/images/product-37.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class=" col-sm-7 col-lg-8">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html"
                                               class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Strawberry
                                            </a>

                                            <a href="wishlist.html"
                                               class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="/client/images/icons/icon-heart-color.png"
                                                     alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04"
                                                     src="/client/images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
											21$
										</span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button
                                                class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-b-30">
                                <div class=" col-sm-5 col-lg-4">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="/client/images/product-38.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class=" col-sm-7 col-lg-8">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html"
                                               class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Red pumpkin
                                            </a>

                                            <a href="wishlist.html"
                                               class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="/client/images/icons/icon-heart-color.png"
                                                     alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04"
                                                     src="/client/images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
											15$
										</span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button
                                                class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-b-30">
                                <div class=" col-sm-5 col-lg-4">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="/client/images/product-39.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class=" col-sm-7 col-lg-8">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html"
                                               class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Cauliflower
                                            </a>

                                            <a href="wishlist.html"
                                               class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="/client/images/icons/icon-heart-color.png"
                                                     alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04"
                                                     src="/client/images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
											19$
										</span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button
                                                class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-b-30">
                                <div class=" col-sm-5 col-lg-4">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="/client/images/product-40.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class=" col-sm-7 col-lg-8">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html"
                                               class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Vegetable
                                            </a>

                                            <a href="wishlist.html"
                                               class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="/client/images/icons/icon-heart-color.png"
                                                     alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04"
                                                     src="/client/images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
											23$
										</span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                            quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button
                                                class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-b-30">
                                <div class=" col-sm-5 col-lg-4">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="/client/images/product-41.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class=" col-sm-7 col-lg-8">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html"
                                               class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Bell pepper
                                            </a>

                                            <a href="wishlist.html"
                                               class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="/client/images/icons/icon-heart-color.png"
                                                     alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04"
                                                     src="/client/images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
											12$
										</span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                            adipisci velit, sed quia non numquam eius modi tempora incidunt.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button
                                                class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-b-30">
                                <div class=" col-sm-5 col-lg-4">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="/client/images/product-42.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class=" col-sm-7 col-lg-8">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html"
                                               class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Beetroot
                                            </a>

                                            <a href="wishlist.html"
                                               class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="/client/images/icons/icon-heart-color.png"
                                                     alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04"
                                                     src="/client/images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
											9$
										</span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            But I must explain to you how all this mistaken idea of denouncing pleasure and
                                            praising pain was born and I will give you a complete account of the system.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button
                                                class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-b-30">
                                <div class=" col-sm-5 col-lg-4">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="/client/images/product-43.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class=" col-sm-7 col-lg-8">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html"
                                               class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Cabbage
                                            </a>

                                            <a href="wishlist.html"
                                               class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="/client/images/icons/icon-heart-color.png"
                                                     alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04"
                                                     src="/client/images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
											15$
										</span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                            laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button
                                                class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-b-30">
                                <div class=" col-sm-5 col-lg-4">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="/client/images/product-44.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class=" col-sm-7 col-lg-8">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html"
                                               class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Tomato
                                            </a>

                                            <a href="wishlist.html"
                                               class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="/client/images/icons/icon-heart-color.png"
                                                     alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04"
                                                     src="/client/images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
											38$
										</span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but
                                            because those who do not know how to pursue pleasure rationally encounter.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button
                                                class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-b-30">
                                <div class=" col-sm-5 col-lg-4">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="/client/images/product-45.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class=" col-sm-7 col-lg-8">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html"
                                               class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Onion
                                            </a>

                                            <a href="wishlist.html"
                                               class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="/client/images/icons/icon-heart-color.png"
                                                     alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04"
                                                     src="/client/images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
											9$
										</span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            On the other hand, we denounce with righteous indignation and dislike men who
                                            are so beguiled and demoralized by the charms of pleasure of the moment.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button
                                                class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-b-30">
                                <div class=" col-sm-5 col-lg-4">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="/client/images/product-46.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class=" col-sm-7 col-lg-8">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html"
                                               class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Eggplant
                                            </a>

                                            <a href="wishlist.html"
                                               class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="/client/images/icons/icon-heart-color.png"
                                                     alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04"
                                                     src="/client/images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
											18$
										</span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            These cases are perfectly simple and easy to distinguish. In a free hour, when
                                            our power of choice is untrammelled and when nothing .
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button
                                                class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="flex-w flex-c-m p-t-47">
                            <a href="#"
                               class="flex-c-m txt-s-115 cl6 size-a-23 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 active-pagi1">
                                1
                            </a>

                            <a href="#" class="flex-c-m txt-s-115 cl6 size-a-23 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3">
                                2
                            </a>

                            <a href="#"
                               class="flex-c-m txt-s-115 cl6 size-a-24 how-btn1 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 p-b-1">
                                Next
                                <span class="lnr lnr-chevron-right m-t-3 m-l-7"></span>
                                <span class="lnr lnr-chevron-right m-t-3"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js-page')
    @include('client.page.product.js')
@endsection

