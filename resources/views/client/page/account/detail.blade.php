@extends('client.master-template')
@section('title')
    <title>Thông tin cá nhân</title>
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
    @include('client.include.title-page',['title'=>'Thông tin cá nhân'])

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

                <div class="col-md-5 col-lg-5">
                    <div id="infor-user" class=" p-t-35 p-l-0-lg mb-5">
                        <div class="txt-m-108 p-b-6 mb-2 dis-flex">
							<span class="cl6 font-weight-bold mr-3">
								Id người dùng:
							</span>

                            <span class="cl9">
                                @if(\Illuminate\Support\Facades\Session::has('loginUserId'))
                                    {{\Illuminate\Support\Facades\Session::get('loginUserId')}}
                                @endif
							</span>
                            <span class="cl9">

							</span>
                        </div>
                        <div class="txt-m-108 p-b-6 mb-2 dis-flex">
							<span class="cl6 font-weight-bold mr-3">
								Họ và tên:
							</span>

                            <span class="cl9">
								{{$items->name}}
							</span>

                        </div>
                        <div class="txt-m-108 p-b-6 mb-2 dis-flex">
							<span class="cl6 font-weight-bold mr-3 ">
								Email:
							</span>
                            <span class="cl9">
								{{$items->email}}
							</span>
                            <span class="cl9">

							</span>
                        </div>
                        <div class="txt-m-108 p-b-6 mb-2 dis-flex">
							<span class="cl6 font-weight-bold mr-3">
								Số điện thoại:
							</span>

                            <span class="cl9">
								{{$items->phone}}
							</span>

                        </div>
                        <div class="txt-m-108 p-b-6 dis-flex">
							<span class="cl6 font-weight-bold mr-3">
								Địa chỉ:
							</span>

                            <span class="cl9">
								{{$items->address}}
							</span>
                            <span class="cl9">
								<input type="text" value="{{$items->address}}" style="display: none">
							</span>

                        </div>
                    </div>
                    <div class=" p-t-35 p-l-0-lg">
                        <div class="txt-m-108 p-b-6 mb-2 dis-flex justify-content-between">
                            <a class="btn btn-info" href="/user/orders">Xem danh sách đơn hàng</a>
                            <a class="btn btn-primary" href="/user/edit/{{session()->get('loginUserId')}}">Chỉnh sửa thông tin</a>
                            <a class="btn btn-dark" href="/user/logOut">Đăng xuất</a>
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

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6170106f86aee40a573782e7/1fies0ctc';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6170425ce6ce4b7a"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
@endsection

