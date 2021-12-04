@extends('client.master-template')
@section('title')
    <title>Home</title>
@endsection
@section('css-page')
    @include('client.page.home.css')
    <link rel="stylesheet" href="/css/jquery.toast.min.css">
@endsection

@section('content-page')

    <!-- Slider -->
    <section class="sec-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <div id="rev_slider_6" class="rev_slide fullwidthabanner" data-version="5.4.5" style="display:none">
                <ul>
                    <!-- Slide 1 -->
                    <li data-transition="fade">
                        <!--  -->
                        <img src="/client/images/bg-slide-10.jpg" alt="IMG-BG" class="rev-slidebg">

                        <!--  -->
                        <h2 class="tp-caption tp-resizeme layer2" data-frames='[{"delay":500,"split":"chars","splitdelay":0.05,"speed":1300,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['94', '94', '80', '70']" data-lineheight="['100', '100', '90', '80']" data-color="['#fff']" data-textAlign="['center', 'center', 'center', 'center']" data-x="['center']"
                            data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['20', '20', '20', '20']" data-width="['960','960','768','576']" data-height="['auto']" data-whitespace="['normal']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]"
                            data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
                            Cần Rau Xin Chào Quý Khách
                        </h2>

                    </li>

                    <!-- Slide 2 -->
                    <li data-transition="fade">
                        <!--  -->
                        <img src="/client/images/bg-slide-12.jpg" alt="IMG-BG" class="rev-slidebg">

                        <!--  -->
                        <h2 class="tp-caption tp-resizeme layer2" data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['94', '94', '80', '70']" data-lineheight="['100', '100', '90', '80']" data-color="['#fff']" data-textAlign="['center', 'center', 'center', 'center']" data-x="['center']"
                            data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['20', '20', '20', '20']" data-width="['960','960','768','576']" data-height="['auto']" data-whitespace="['normal']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]"
                            data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
                            Cửa Hàng
                            <div>Cần Rau</div>
                        </h2>

                    </li>

                    <!-- Slide 3 -->
                    <li data-transition="fade">
                        <!--  -->
                        <img src="/client/images/bg-slide-11.jpg" alt="IMG-BG" class="rev-slidebg">

                        <!--  -->
                        <h2 class="tp-caption tp-resizeme layer2" data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['94', '94', '80', '70']" data-lineheight="['100', '100', '90', '80']" data-color="['#fff']" data-textAlign="['center', 'center', 'center', 'center']" data-x="['center']"
                            data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['20', '20', '20', '20']" data-width="['960','960','768','576']" data-height="['auto']" data-whitespace="['normal']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]"
                            data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
                            Cửa Hàng
                            <div>Cần Rau</div>
                        </h2>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Product -->
    <div class="sec-product bg0 p-t-145 p-b-25">
        <div class="container">
            <div class="size-a-1 flex-col-c-m p-b-48">
                <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                    Các sản phẩm nổi bật

                    <div class="how-pos1">
                        <img src="/client/images/icons/symbol-02.png" alt="IMG">
                    </div>
                </div>

                <h3 class="txt-center txt-l-101 cl3 respon1">
                    Sản phẩm của chúng tôi
                </h3>
            </div>

            <div class="row isotope-grid">
                @foreach($items as $item)
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item fruit-juic-fill other-fill">
                    <!-- Block1 -->
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                            <img src="{{$item->FirstImage}}" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <a href="/product/{{$item->id}}" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                    {{$item->name}}
                                </a>

                                <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
									{{$item->FormatPrice}} VND
								</span>

                                <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                    <a href="/product/{{$item->id}}"
                                       class="block1-icon flex-c-m wrap-pic-max-w">
                                        <img style="padding: 6px"
                                             src="/client/images/icons/information.png"
                                             alt="ICON">
                                    </a>

                                    <p data-id="{{$item->id}}"
                                       class=" pointer cart-add block1-icon flex-c-m wrap-pic-max-w">
                                        <img src="/client/images/icons/icon-cart.png"
                                             alt="ICON">
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Delivery -->
    <section class="sec-delivery bg-img1 p-t-145 p-b-100" style="background-image: url(/client/images/bg-02.jpg);">
        <div class="container">
            <div class="size-a-1 flex-col-c-m p-b-60">
                <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                    Organic food

                    <div class="how-pos1">
                        <img src="/client/images/icons/symbol-02.png" alt="IMG">
                    </div>
                </div>

                <h3 class="txt-center txt-l-101 cl3 respon1">
                    Delivery Process
                </h3>
            </div>

            <!-- -->
            <div class="txt-center pos-relative">
                <img class="max-w-full" src="/client/images/other-12.png" alt="IMG">
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="sec-blog bg0 p-t-145 p-b-64">
        <div class="container">
            <div class="size-a-1 flex-col-c-m p-b-70">
                <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                   Theo dõi tin tức

                    <div class="how-pos1">
                        <img src="/client/images/icons/symbol-02.png" alt="IMG">
                    </div>
                </div>

                <h3 class="txt-center txt-l-101 cl3 respon1">
                    Bài viết
                </h3>
            </div>

            <div class="row">
                @foreach($blog as $blogs)
                    <div class="col-sm-6 col-md-4 p-b-30">
                        <div>
                            <a href="/blog/{{$blogs->id}}" class="wrap-pic-w hov4">
                                <img src="{{$blogs->thumbnail}}" alt="BLOG">
                            </a>

                            <div class="p-t-18">
                            <span class="txt-s-107 cl3">
								{{$blogs->created_at->format('d/m/y')}}
							</span>

                                <h4 class="p-t-5 p-b-14">
                                    <a href="blog-single.html" class="txt-m-109 cl3 hov-cl10 trans-04">
                                        {{$blogs->title}}
                                    </a>
                                </h4>

                                <div class="flex-w flex-m">
                                    <div class="p-r-19">
                                    <span class="txt-s-111 cl9">
										Đăng bởi:
									</span>

                                        <span class="txt-s-119 cl6">
										Râu cần sạch
									</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
@section('js-page')
    @include('client.page.home.js')
    <script src="/js/jquery.toast.min.js"></script>
    <script>
        {{--   Add to Cart Ajax     --}}
        $('.cart-add').on('click', function () {
            let id = $(this).data('id');
            let data = {
                id: id,
                quantity: 1
            }
            $.ajax({
                url: `http://127.0.0.1:8000/cart/add`,
                method: 'POST',
                data: JSON.stringify(data),
                success: function (response) {
                    console.log("response la: ",response);
                    let result = JSON.parse(response);
                    let stringHtml = ``;
                    let totalCart = 0;
                    console.log("result la: ",result);
                    console.log("Object key la: ",Object.keys(result));
                    console.log("Object values la: ",Object.values(result));
                    Object.entries(result).forEach(([key, value]) => {
                        stringHtml += cartHeader(value);
                        totalCart += value.unitPrice * value.quantity;
                    });
                    $('#cart-header').html(stringHtml)
                    $('#total-cart').html(`
                    <p>${new Intl.NumberFormat().format(totalCart)} <small>VND</small></p>
                    `)
                    $('.icon-header-item').attr('data-notify', Object.keys(result).length);
                    message();
                },

            });

        })

        function cartHeader(data) {

            return `
            <div class="flex-w flex-str m-b-25 " style="position: relative">
                <div class="size-w-15 flex-w flex-t">
                    <a href="/product/${data.id}"
                       class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                        <img src="${data.thumbnail}" alt="PRODUCT">
                    </a>

                    <div class="size-w-17 flex-col-l">
                        <a href="/product/${data.id}" class="txt-s-108 cl3 hov-cl10 trans-04">${data.name}</a>
                        <span class="txt-s-101 cl9">${new Intl.NumberFormat().format(data.unitPrice)} <small>VND</small></span>
                        <span class="txt-s-109 cl12">x${data.quantity}</span>
                    </div>
                </div>


            </div>
            `;
        }

        function message() {
            $.toast({
                icon: 'success',
                heading: 'Thành công',
                text: 'Thêm mới sản phẩm thành công vào giỏ hàng.',
                bgColor: '#81b03f',
                textColor: 'white'
            });
        }

    </script>
@endsection
