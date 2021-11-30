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
                    <!-- - -->
                    <div class="tab-pane fade" id="info" role="tabpanel">
                        <ul class="p-t-21">
                            <li class="txt-s-101 flex-w how-bor2 p-tb-14">
								<span class="cl6 size-w-54">
									Weight
								</span>

                                <span class="cl9 size-w-55">
									0.5 kg
								</span>
                            </li>

                            <li class="txt-s-101 flex-w how-bor2 p-tb-14">
								<span class="cl6 size-w-54">
									Counrty of Origin
								</span>

                                <span class="cl9 size-w-55">
									Imported
								</span>
                            </li>

                            <li class="txt-s-101 flex-w how-bor2 p-tb-14">
								<span class="cl6 size-w-54">
									Quality
								</span>

                                <span class="cl9 size-w-55">
									Oraganic
								</span>
                            </li>
                        </ul>
                    </div>

                    <!-- - -->
                    <div id="review-product" style="display: none;" class=" reviewAndDetail">
                        <div class="fb-comments"
                             data-href="https://developers.facebook.com/docs/plugins/comments#configurator"
                             data-width="" data-numposts="5"></div>
                        {{--                        <div class="p-t-36">--}}
                        {{--                            <h5 class="txt-m-102 cl3 p-b-36">--}}
                        {{--                                1 review for Cauliflower--}}
                        {{--                            </h5>--}}

                        {{--                            <div class="flex-w flex-sb-t bo-b-1 bocl15 p-b-37">--}}
                        {{--                                <div class="wrap-pic-w size-w-56">--}}
                        {{--                                    <img src="/client/images/avatar-03.jpg" alt="AVATAR">--}}
                        {{--                                </div>--}}

                        {{--                                <div class="size-w-57 p-t-2">--}}
                        {{--                                    <div class="flex-w flex-sb-m p-b-8">--}}
                        {{--                                        <div class="flex-w flex-b m-r-20 p-tb-5">--}}
                        {{--											<span class="txt-m-103 cl6 m-r-20">--}}
                        {{--												Crystal Jimenez--}}
                        {{--											</span>--}}

                        {{--                                            <span class="txt-s-120 cl9">--}}
                        {{--												( United States – June 21, 2017 )--}}
                        {{--											</span>--}}
                        {{--                                        </div>--}}

                        {{--                                        <span class="fs-16 cl11 lh-15 txt-center m-r-15 p-tb-5">--}}
                        {{--											<i class="fa fa-star m-rl-1"></i>--}}
                        {{--											<i class="fa fa-star m-rl-1"></i>--}}
                        {{--											<i class="fa fa-star m-rl-1"></i>--}}
                        {{--											<i class="fa fa-star m-rl-1"></i>--}}
                        {{--											<i class="fa fa-star m-rl-1"></i>--}}
                        {{--										</span>--}}
                        {{--                                    </div>--}}

                        {{--                                    <p class="txt-s-101 cl6">--}}
                        {{--                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.--}}
                        {{--                                    </p>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <!-- Add review -->--}}
                        {{--                            <form class="w-full p-t-42">--}}
                        {{--                                <h5 class="txt-m-102 cl3 p-b-20">--}}
                        {{--                                    Add a review--}}
                        {{--                                </h5>--}}

                        {{--                                <p class="txt-s-101 cl6 p-b-10">--}}
                        {{--                                    Your email address will not be published. Required fields are marked *--}}
                        {{--                                </p>--}}

                        {{--                                <div class="flex-w flex-m p-b-3">--}}
                        {{--									<span class="txt-s-101 cl6 p-b-5 m-r-10">--}}
                        {{--										Your Rating--}}
                        {{--									</span>--}}

                        {{--                                    <span class="wrap-rating fs-16 cl11 pointer">--}}
                        {{--										<i class="item-rating pointer fa fa-star-o m-rl-1"></i>--}}
                        {{--										<i class="item-rating pointer fa fa-star-o m-rl-1"></i>--}}
                        {{--										<i class="item-rating pointer fa fa-star-o m-rl-1"></i>--}}
                        {{--										<i class="item-rating pointer fa fa-star-o m-rl-1"></i>--}}
                        {{--										<i class="item-rating pointer fa fa-star-o m-rl-1"></i>--}}
                        {{--										<input class="dis-none" type="number" name="rating">--}}
                        {{--									</span>--}}
                        {{--                                </div>--}}

                        {{--                                <span class="txt-s-101 cl6">--}}
                        {{--									Your review *--}}
                        {{--								</span>--}}

                        {{--                                <div class="row p-t-12">--}}
                        {{--                                    <div class="col-sm-6 p-b-30">--}}
                        {{--                                        <input class="txt-s-101 cl3 plh1 size-a-25 bo-all-1 bocl11 focus1 p-rl-20" type="text" name="name" placeholder="Name *">--}}
                        {{--                                    </div>--}}

                        {{--                                    <div class="col-sm-6 p-b-30">--}}
                        {{--                                        <input class="txt-s-101 cl3 plh1 size-a-25 bo-all-1 bocl11 focus1 p-rl-20" type="text" name="email" placeholder="Email *">--}}
                        {{--                                    </div>--}}

                        {{--                                    <div class="col-12 p-b-30">--}}
                        {{--                                        <textarea class="txt-s-101 cl3 plh1 size-a-26 bo-all-1 bocl11 focus1 p-rl-20 p-tb-10" name="review" placeholder="Your review *"></textarea>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}

                        {{--                                <div class="flex-r">--}}
                        {{--                                    <button class="flex-c-m txt-s-103 cl0 bg10 size-a-27 hov-btn2 trans-04">--}}
                        {{--                                        Submit--}}
                        {{--                                    </button>--}}
                        {{--                                </div>--}}
                        {{--                            </form>--}}


                        {{--                        </div>--}}
                        {{--=======--}}
                        {{--                    <div id="review-product" style="display: none;" class=" reviewAndDetail"><br>--}}
                        {{--                        <h3>Menu 2</h3>--}}
                        {{--                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque--}}
                        {{--                            laudantium, totam rem aperiam.</p>--}}
                        {{-->>>>>>> dc5e67f85656caa2965f48a2002fa297e40ca9a6--}}
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
                        Đã xem gần đây
                    </h3>

                    <div class="wrap-arrow-slick9 flex-w m-t-6"></div>
                </div>

                <div class="slick9">


                    <!-- - -->
                    @foreach($recent as $recentItems)
                        <div class="item-slick9 p-all-15">
                            <!-- Block1 -->
                            <div class="block1">
                                <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                    <img src="{{$recentItems->firstImage}}" alt="IMG">

                                    <div class="block1-content flex-col-c-m p-b-46">
                                        <a href="product-single.html"
                                           class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                            {{$recentItems->name}}
                                        </a>

                                        <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
										{{$recentItems->formatPrice}}

									</span>

                                        <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                            <a href="/product/{{$recentItems->id}}"
                                               class="block1-icon flex-c-m wrap-pic-max-w">
                                                <img src="/client/images/icons/icon-view.png" alt="ICON">
                                            </a>

                                            <a href="/cart/add?id={{$recentItems->id}}&quantity=1"
                                               class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                                <img src="/client/images/icons/icon-cart.png" alt="ICON">
                                            </a>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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

