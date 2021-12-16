@extends('client.master-template')
@section('title')
    <title>Trang trại chi tiết</title>
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
    @include('client.include.title-page',['title'=>'Trang trại chi tiết'])

    <!-- Product detail -->
    <section class="sec-product-detail bg0 p-t-105 p-b-70">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-6">
                    <div class="colmd-12">
                        <img src="{{$item->firstImage}}" class="thumbnail-custom" alt="">
                    </div>
                </div>

                <div class="col-md-5 col-lg-6">
                    <div class=" p-t-35 p-l-0-lg">
                        <h4 class="js-name1 txt-l-104 cl3 p-b-16">
                            {{$item->name}}
                        </h4>

                        <div class="txt-s-107 p-b-6">
							<span class="cl6">
								Số điện thoại:
							</span>

                            <span class="cl9">
								{{$item->phone}}
							</span>
                        </div>

                        <div class="txt-s-107 p-b-6">
							<span class="cl6">
								Email:
							</span>

                            <span class="cl9">
								{{$item->email}}
							</span>
                        </div>

                        <div class="txt-s-107 p-b-6">
							<span class="cl6">
								Tình Trạng:
							</span>
                            @switch($item->status)
                                @case(1)
                                <span class="cl9">
                                    Tồn tại
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
								Các sản phẩm liên quan:
							</span>
                            <a class="cl9" href="/product/farm/{{$item->id}}">
                                {{$item->name}}
							</a>

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
                        {!! $item->description !!}
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

@endsection
@section('js-page')
    @include('client.page.product.js')
    <script src="/js/jquery.toast.min.js"></script>
{{--    <script src="/js/client-custom.js"></script>--}}
    @include('client.page.product.client-custom-js')
    <script>
        function openDetailAndReview(reviewOrDetail) {
            var x = document.getElementsByClassName('reviewAndDetail')
            for (var i = 0; i < x.length; i++) {
                x[i].style.display = 'none';
            }
            document.getElementById(reviewOrDetail).style.display = 'block';
        }
    </script>

    @include('client.plugin.plugin')
@endsection

