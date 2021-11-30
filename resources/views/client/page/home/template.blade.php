@extends('client.master-template')
@section('title')
    <title>Home</title>
@endsection
@section('css-page')
    @include('client.page.home.css')
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
                        <div class="tp-caption tp-resizeme flex-c-m flex-w layer1" data-frames='[{"delay":1700,"speed":1500,"frame":"0","from":"y:-150px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['-100', '-100', '-100', '-120']" data-width="['960','960','768','576']" data-height="['auto']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]"
                             data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
                            <img src="/client/images/icons/symbol-42.png" alt="IMG">
                        </div>

                        <!--  -->
                        <h2 class="tp-caption tp-resizeme layer2" data-frames='[{"delay":500,"split":"chars","splitdelay":0.05,"speed":1300,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['94', '94', '80', '70']" data-lineheight="['100', '100', '90', '80']" data-color="['#fff']" data-textAlign="['center', 'center', 'center', 'center']" data-x="['center']"
                            data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['20', '20', '20', '20']" data-width="['960','960','768','576']" data-height="['auto']" data-whitespace="['normal']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]"
                            data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
                            Quality food
                        </h2>

                        <!--  -->
                        <div class="tp-caption tp-resizeme flex-c-m flex-w layer3" data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:150px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['132', '132', '132', '152']" data-width="['960','960','768','576']" data-height="['auto']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]"
                             data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
                            <img src="/client/images/icons/symbol-19.png" alt="IMG">
                        </div>
                    </li>

                    <!-- Slide 2 -->
                    <li data-transition="fade">
                        <!--  -->
                        <img src="/client/images/bg-slide-12.jpg" alt="IMG-BG" class="rev-slidebg">

                        <!--  -->
                        <div class="tp-caption tp-resizeme flex-c-m flex-w layer1" data-frames='[{"delay":1700,"speed":1300,"frame":"0","from":"x:300px;skX:-85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['-100', '-100', '-100', '-120']" data-width="['960','960','768','576']" data-height="['auto']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]"
                             data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
                            <img src="/client/images/icons/symbol-42.png" alt="IMG">
                        </div>

                        <!--  -->
                        <h2 class="tp-caption tp-resizeme layer2" data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['94', '94', '80', '70']" data-lineheight="['100', '100', '90', '80']" data-color="['#fff']" data-textAlign="['center', 'center', 'center', 'center']" data-x="['center']"
                            data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['20', '20', '20', '20']" data-width="['960','960','768','576']" data-height="['auto']" data-whitespace="['normal']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]"
                            data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
                            Quality food
                        </h2>

                        <!--  -->
                        <div class="tp-caption tp-resizeme flex-c-m flex-w layer3" data-frames='[{"delay":2500,"speed":1300,"frame":"0","from":"x:-300px;skX:85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['132', '132', '132', '152']" data-width="['960','960','768','576']" data-height="['auto']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]"
                             data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
                            <img src="/client/images/icons/symbol-19.png" alt="IMG">
                        </div>
                    </li>

                    <!-- Slide 3 -->
                    <li data-transition="fade">
                        <!--  -->
                        <img src="/client/images/bg-slide-11.jpg" alt="IMG-BG" class="rev-slidebg">

                        <!--  -->
                        <div class="tp-caption tp-resizeme flex-c-m flex-w layer1" data-frames='[{"delay":1200,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['-100', '-100', '-100', '-120']" data-width="['960','960','768','576']" data-height="['auto']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]"
                             data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
                            <img src="/client/images/icons/symbol-42.png" alt="IMG">
                        </div>

                        <!--  -->
                        <h2 class="tp-caption tp-resizeme layer2" data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['94', '94', '80', '70']" data-lineheight="['100', '100', '90', '80']" data-color="['#fff']" data-textAlign="['center', 'center', 'center', 'center']" data-x="['center']"
                            data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['20', '20', '20', '20']" data-width="['960','960','768','576']" data-height="['auto']" data-whitespace="['normal']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]"
                            data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
                            Quality food
                        </h2>

                        <!--  -->
                        <div class="tp-caption tp-resizeme flex-c-m flex-w layer3" data-frames='[{"delay":2600,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.6;sY:0.6;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['132', '132', '132', '152']" data-width="['960','960','768','576']" data-height="['auto']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]"
                             data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
                            <img src="/client/images/icons/symbol-19.png" alt="IMG">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="sec-about bg0 p-t-120 flex-w flex-str">
        <div class="size-w-46 p-rl-15 p-t-72 order-lg-2 respon13">
            <div class="size-a-1 flex-col-l p-b-25">
                <div class="txt-m-201 cl10 how-pos1-parent m-b-14">
                    About Us

                    <div class="how-pos1">
                        <img src="/client/images/icons/symbol-02.png" alt="IMG">
                    </div>
                </div>

                <h3 class="txt-l-101 cl3 respon1">
                    who we are
                </h3>
            </div>

            <p class="txt-s-116 cl6">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.
            </p>

            <div class="flex-w flex-sb p-t-55">
                <div class="flex-col-c-m size-w-47 how-shadow3 p-rl-12 p-t-45 p-b-40 m-b-23 respon14">
                    <img src="/client/images/icons/symbol-37-min.png" alt="SYMBOL">
                    <span class="txt-s-117 cl10 txt-center p-t-22">
						Healthy food
					</span>
                </div>

                <div class="flex-col-c-m size-w-47 how-shadow3 p-rl-12 p-t-45 p-b-40 m-b-23 respon14">
                    <img src="/client/images/icons/symbol-38-min.png" alt="SYMBOL">
                    <span class="txt-s-117 cl10 txt-center p-t-22">
						Do jobs only
					</span>
                </div>

                <div class="flex-col-c-m size-w-47 how-shadow3 p-rl-12 p-t-45 p-b-40 m-b-23 respon14">
                    <img src="/client/images/icons/symbol-39-min.png" alt="SYMBOL">
                    <span class="txt-s-117 cl10 txt-center p-t-22">
						Fresh produce
					</span>
                </div>

                <div class="flex-col-c-m size-w-47 how-shadow3 p-rl-12 p-t-45 p-b-40 m-b-23 respon14">
                    <img src="/client/images/icons/symbol-40-min.png" alt="SYMBOL">
                    <span class="txt-s-117 cl10 txt-center p-t-22">
						Best equipment
					</span>
                </div>

                <div class="flex-col-c-m size-w-47 how-shadow3 p-rl-12 p-t-45 p-b-40 m-b-23 respon14">
                    <img src="/client/images/icons/symbol-41-min.png" alt="SYMBOL">
                    <span class="txt-s-117 cl10 txt-center p-t-22">
						Organic nature
					</span>
                </div>

                <div class="flex-col-c-m size-w-47 how-shadow3 p-rl-12 p-t-45 p-b-40 m-b-23 respon14">
                    <img src="/client/images/icons/symbol-43.png" alt="SYMBOL">
                    <span class="txt-s-117 cl10 txt-center p-t-22">
						Early delivery
					</span>
                </div>
            </div>
        </div>

        <div class="size-w-45 flex-b p-rl-40 p-t-30 order-lg-1 w-full-lg p-rl-15-sm">
            <div class="wrap-pic-max-w">
                <img src="/client/images/other-11.jpg" alt="IMG">
            </div>
        </div>
    </section>


    <!-- Product -->
    <div class="sec-product bg0 p-t-145 p-b-25">
        <div class="container">
            <div class="size-a-1 flex-col-c-m p-b-48">
                <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                    Featured Products

                    <div class="how-pos1">
                        <img src="/client/images/icons/symbol-02.png" alt="IMG">
                    </div>
                </div>

                <h3 class="txt-center txt-l-101 cl3 respon1">
                    Our products
                </h3>
            </div>

            <div class="p-b-46">
                <div class="flex-w flex-c-m filter-tope-group">
                    <button class="txt-m-104 cl12 hov2 trans-04 p-rl-27 p-b-10 how-active1" data-filter="*">
                        All Products
                    </button>
                </div>
            </div>

            <div class="row isotope-grid">
                <!-- - -->

                <!-- - -->
                @foreach($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item fruit-fill">
                        <!-- Block1 -->
                        <div class="block1">
                            <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                <img src="{{$item->firstImage}}" >

                                <div class="block1-content flex-col-c-m p-b-46">
                                    <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                        {{$item->name}}
                                    </a>

                                    <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
									{{$item->formatPrice}}
								</span>

                                    <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                        <a href="/product/{{$item->id}}" class="block1-icon flex-c-m wrap-pic-max-w">
                                            <img style="padding: 6px"
                                                 src="/client/images/icons/information.png"
                                                 alt="ICON">
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

    <!-- Product2 -->


    <!-- Incentives -->
    <section class="sec-incen bg12 p-t-70 p-b-10">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 order-md-2 col-md-6 m-rl-auto">
                    <div class="h-full flex-m p-l-30 p-rl-0-lg">
                        <div class="p-t-77 p-b-50">
                            <div class="size-a-1 flex-col-l p-b-29">
                                <div class="txt-m-201 cl10 how-pos1-parent m-b-14">
                                    Benefit For Guests

                                    <div class="how-pos1">
                                        <img src="/client/images/icons/symbol-02.png" alt="IMG">
                                    </div>
                                </div>

                                <h3 class="txt-l-101 cl3 respon1">
                                    Our incentives
                                </h3>
                            </div>

                            <p class="txt-s-101 cl9">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor-emque laudantium, totam rem aperiam, eaque ipsa quae.
                            </p>

                            <ul class="p-t-67">
                                <li class="flex-w flex-t p-b-40">
                                    <div class="size-w-48 wrap-pic-max-w txt-left">
                                        <img src="/client/images/icons/symbol-48.png" alt="SYMBOL">
                                    </div>

                                    <div class="size-w-49">
                                        <h4 class="txt-m-103 cl3 p-b-6">
                                            Free Shipping
                                        </h4>

                                        <p class="txt-s-101 cl6">
                                            For orders of $ 2000, apply to all products
                                        </p>
                                    </div>
                                </li>

                                <li class="flex-w flex-t p-b-40">
                                    <div class="size-w-48 wrap-pic-max-w txt-left">
                                        <img src="/client/images/icons/symbol-49.png" alt="SYMBOL">
                                    </div>

                                    <div class="size-w-49">
                                        <h4 class="txt-m-103 cl3 p-b-6">
                                            Customer Support
                                        </h4>

                                        <p class="txt-s-101 cl6">
                                            Need help: (434) 796 5398
                                        </p>
                                    </div>
                                </li>

                                <li class="flex-w flex-t p-b-40">
                                    <div class="size-w-48 wrap-pic-max-w txt-left">
                                        <img src="/client/images/icons/symbol-50.png" alt="SYMBOL">
                                    </div>

                                    <div class="size-w-49">
                                        <h4 class="txt-m-103 cl3 p-b-6">
                                            Secure Payments
                                        </h4>

                                        <p class="txt-s-101 cl6">
                                            Secure Confirmed
                                        </p>
                                    </div>
                                </li>

                                <li class="flex-w flex-t p-b-40">
                                    <div class="size-w-48 wrap-pic-max-w txt-left">
                                        <img src="/client/images/icons/symbol-51.png" alt="SYMBOL">
                                    </div>

                                    <div class="size-w-49">
                                        <h4 class="txt-m-103 cl3 p-b-6">
                                            100% Organic Certified
                                        </h4>

                                        <p class="txt-s-101 cl6">
                                            100% Organic Certified Food
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 order-md-1 col-md-6 m-rl-auto">
                    <div class="flex-m h-full p-r-30 p-rl-0-lg">
                        <div class="wrap-pic-max-s">
                            <img src="/client/images/other-13.jpg" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="sec-blog bg0 p-t-145 p-b-64">
        <div class="container">
            <div class="size-a-1 flex-col-c-m p-b-70">
                <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                    Keep Updated With Us

                    <div class="how-pos1">
                        <img src="/client/images/icons/symbol-02.png" alt="IMG">
                    </div>
                </div>

                <h3 class="txt-center txt-l-101 cl3 respon1">
                    From our blog
                </h3>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-4 p-b-30">
                    <div>
                        <a href="blog-single.html" class="wrap-pic-w hov4">
                            <img src="/client/images/blog-11.jpg" alt="BLOG">
                        </a>

                        <div class="p-t-18">
                            <span class="txt-s-107 cl3">
								Dec 20.2018
							</span>

                            <h4 class="p-t-5 p-b-14">
                                <a href="blog-single.html" class="txt-m-109 cl3 hov-cl10 trans-04">
                                    At vero eos et accusamus et iusto
                                </a>
                            </h4>

                            <div class="flex-w flex-m">
                                <div class="p-r-19">
                                    <span class="txt-s-111 cl9">
										Post by
									</span>

                                    <span class="txt-s-119 cl6">
										Evelyn Guzman
									</span>
                                </div>

                                <div>
                                    <span class="txt-s-111 cl9">
										22 Comments
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 p-b-30">
                    <div>
                        <a href="blog-single.html" class="wrap-pic-w hov4">
                            <img src="/client/images/blog-12.jpg" alt="BLOG">
                        </a>

                        <div class="p-t-18">
                            <span class="txt-s-107 cl3">
								March 18.2018
							</span>

                            <h4 class="p-t-5 p-b-14">
                                <a href="blog-single.html" class="txt-m-109 cl3 hov-cl10 trans-04">
                                    Temporibus autem quibusdam
                                </a>
                            </h4>

                            <div class="flex-w flex-m">
                                <div class="p-r-19">
                                    <span class="txt-s-111 cl9">
										Post by
									</span>

                                    <span class="txt-s-119 cl6">
										Samuel Stewart
									</span>
                                </div>

                                <div>
                                    <span class="txt-s-111 cl9">
										15 Comments
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 p-b-30">
                    <div>
                        <a href="blog-single.html" class="wrap-pic-w hov4">
                            <img src="/client/images/blog-13.jpg" alt="BLOG">
                        </a>

                        <div class="p-t-18">
                            <span class="txt-s-107 cl3">
								June 05.2018
							</span>

                            <h4 class="p-t-5 p-b-14">
                                <a href="blog-single.html" class="txt-m-109 cl3 hov-cl10 trans-04">
                                    Excepteur sint occaecat cupidatat
                                </a>
                            </h4>

                            <div class="flex-w flex-m">
                                <div class="p-r-19">
                                    <span class="txt-s-111 cl9">
										Post by
									</span>

                                    <span class="txt-s-119 cl6">
										Justin Foster
									</span>
                                </div>

                                <div>
                                    <span class="txt-s-111 cl9">
										53 Comments
									</span>
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
    @include('client.page.home.js')
@endsection
