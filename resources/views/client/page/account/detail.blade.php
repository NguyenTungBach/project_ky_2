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
                        <img
                            src="https://png.pngtree.com/png-vector/20210128/ourlarge/pngtree-flat-default-avatar-png-image_2848906.jpg"
                            class="thumbnail-custom" alt="">
                    </div>
                </div>

                <div class="col-md-5 col-lg-6">
                    <div class=" p-t-35 p-l-0-lg">
                        <div class="txt-s-107 p-b-6">
							<span class="cl6">
								Họ và tên:
							</span>

                            <span class="cl9">
								{{$items->name}}
							</span>
                        </div>
                        <div class="txt-s-107 p-b-6">
							<span class="cl6">
								Email:
							</span>

                            <span class="cl9">
								{{$items->email}}
							</span>
                        </div>
                        <div class="txt-s-107 p-b-6">
							<span class="cl6">
								Số điện thoại:
							</span>

                            <span class="cl9">
								{{$items->phone}}
							</span>
                        </div>
                        <div class="txt-s-107 p-b-6">
							<span class="cl6">
								Địa chỉ:
							</span>

                            <span class="cl9">
								{{$items->address}}
							</span>
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

