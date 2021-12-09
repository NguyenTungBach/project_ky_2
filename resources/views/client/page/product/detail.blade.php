@extends('client.master-template')
@section('title')
    <title>Product detail</title>
@endsection
@section('css-page')
    @include('client.page.product.css')
    <link rel="stylesheet" href="/css/jquery.toast.min.css">
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
    @include('client.include.title-page',['title'=>'Sản phẩm chi tiết'])

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
                                <div class="btn-num-product-down flex-c-m fs-29 detail-down"></div>

                                <input  class="txt-m-102 cl6 txt-center num-product"
                                       value="1"
                                       type="number" name="quantity">

                                <div class="btn-num-product-up flex-c-m fs-16 detail-up"></div>
                            </div>

                            <button data-id="{{$items->id}}" data-quantity="1" class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 m-b-30 detail-add-cart">
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
								Tình Trạng:
							</span>
                            @switch($items->status)
                                @case(1)
                                <span class="cl9">
                                    Đang bán
							</span>
                                @break
                                @case(2)
                                <span class="cl9">
                                    Hết hàng
							</span>
                                @break
                                @case(0)
                                <span class="cl9">
                                   Đã xóa
							</span>
                                @break
                            @endswitch

                        </div>
                        <div class="txt-s-107 p-b-6">
							<span class="cl6">
								TRANG TRẠI:
							</span>
                            <span class="cl9">
                                {{$items->farm->name}}
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
                    <div id="review-product" style="display: none;" class=" reviewAndDetail">
                        <div class="fb-comments"
                             data-href="https://developers.facebook.com/docs/plugins/comments#configurator"
                             data-width="" data-numposts="5"></div>

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
    <script src="/js/jquery.toast.min.js"></script>
    <script src="/js/client-custom.js"></script>
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

