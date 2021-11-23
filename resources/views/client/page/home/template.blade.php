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

    <!-- Gallery -->
    <section class="sec-gallery bg12 p-t-145 p-b-100">
        <div class="container">
            <div class="size-a-1 flex-col-c-m p-b-70">
                <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                    Fresh Vegetables

                    <div class="how-pos1">
                        <img src="/client/images/icons/symbol-02.png" alt="IMG">
                    </div>
                </div>

                <h3 class="txt-center txt-l-101 cl3 respon1">
                    Our Gallery
                </h3>
            </div>

            <div class="row gallery-lb">
                <div class="col-sm-10 col-md-6 col-lg-4 p-b-30 m-rl-auto">
                    <div class="gallery-item wrap-pic-w">
                        <img src="/client/images/gallery-01.jpg" alt="GALLERY">

                        <div class="gallery-overlay flex-c-m trans-04">
                            <div class="gallery-content flex-w flex-c-m w-full">
                                <a class="flex-c-m gallery-btn m-all-5 trans-04 js-show-gallery" href="/client/images/gallery-01.jpg">
                                    <img src="/client/images/icons/icon-open.png" alt="OPEN">
                                </a>

                                <a href="#" class="flex-c-m gallery-btn m-all-5 trans-04">
                                    <img src="/client/images/icons/icon-link.png" alt="LINK">
                                </a>

                                <div class="gallery-txt flex-col-c p-rl-15 p-t-10 trans-04">
                                    <span class="txt-m-109 cl0 txt-center">
										Nam libero tempore
									</span>

                                    <span class="txt-s-106 cl0 txt-center">
										Vegetable
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-6 col-lg-4 p-b-30 m-rl-auto">
                    <div class="gallery-item wrap-pic-w">
                        <img src="/client/images/gallery-02.jpg" alt="GALLERY">

                        <div class="gallery-overlay flex-c-m trans-04">
                            <div class="gallery-content flex-w flex-c-m w-full">
                                <a class="flex-c-m gallery-btn m-all-5 trans-04 js-show-gallery" href="/client/images/gallery-02.jpg">
                                    <img src="/client/images/icons/icon-open.png" alt="OPEN">
                                </a>

                                <a href="#" class="flex-c-m gallery-btn m-all-5 trans-04">
                                    <img src="/client/images/icons/icon-link.png" alt="LINK">
                                </a>

                                <div class="gallery-txt flex-col-c p-rl-15 p-t-10 trans-04">
                                    <span class="txt-m-109 cl0 txt-center">
										Nam libero tempore
									</span>

                                    <span class="txt-s-106 cl0 txt-center">
										Vegetable
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-6 col-lg-4 p-b-30 m-rl-auto">
                    <div class="gallery-item wrap-pic-w">
                        <img src="/client/images/gallery-03.jpg" alt="GALLERY">

                        <div class="gallery-overlay flex-c-m trans-04">
                            <div class="gallery-content flex-w flex-c-m w-full">
                                <a class="flex-c-m gallery-btn m-all-5 trans-04 js-show-gallery" href="/client/images/gallery-03.jpg">
                                    <img src="/client/images/icons/icon-open.png" alt="OPEN">
                                </a>

                                <a href="#" class="flex-c-m gallery-btn m-all-5 trans-04">
                                    <img src="/client/images/icons/icon-link.png" alt="LINK">
                                </a>

                                <div class="gallery-txt flex-col-c p-rl-15 p-t-10 trans-04">
                                    <span class="txt-m-109 cl0 txt-center">
										Nam libero tempore
									</span>

                                    <span class="txt-s-106 cl0 txt-center">
										Vegetable
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-6 col-lg-4 p-b-30 m-rl-auto">
                    <div class="gallery-item wrap-pic-w">
                        <img src="/client/images/gallery-04.jpg" alt="GALLERY">

                        <div class="gallery-overlay flex-c-m trans-04">
                            <div class="gallery-content flex-w flex-c-m w-full">
                                <a class="flex-c-m gallery-btn m-all-5 trans-04 js-show-gallery" href="/client/images/gallery-04.jpg">
                                    <img src="/client/images/icons/icon-open.png" alt="OPEN">
                                </a>

                                <a href="#" class="flex-c-m gallery-btn m-all-5 trans-04">
                                    <img src="/client/images/icons/icon-link.png" alt="LINK">
                                </a>

                                <div class="gallery-txt flex-col-c p-rl-15 p-t-10 trans-04">
                                    <span class="txt-m-109 cl0 txt-center">
										Nam libero tempore
									</span>

                                    <span class="txt-s-106 cl0 txt-center">
										Vegetable
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-6 col-lg-4 p-b-30 m-rl-auto">
                    <div class="gallery-item wrap-pic-w">
                        <img src="/client/images/gallery-05.jpg" alt="GALLERY">

                        <div class="gallery-overlay flex-c-m trans-04">
                            <div class="gallery-content flex-w flex-c-m w-full">
                                <a class="flex-c-m gallery-btn m-all-5 trans-04 js-show-gallery" href="/client/images/gallery-05.jpg">
                                    <img src="/client/images/icons/icon-open.png" alt="OPEN">
                                </a>

                                <a href="#" class="flex-c-m gallery-btn m-all-5 trans-04">
                                    <img src="/client/images/icons/icon-link.png" alt="LINK">
                                </a>

                                <div class="gallery-txt flex-col-c p-rl-15 p-t-10 trans-04">
                                    <span class="txt-m-109 cl0 txt-center">
										Nam libero tempore
									</span>

                                    <span class="txt-s-106 cl0 txt-center">
										Vegetable
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-6 col-lg-4 p-b-30 m-rl-auto">
                    <div class="gallery-item wrap-pic-w">
                        <img src="/client/images/gallery-06.jpg" alt="GALLERY">

                        <div class="gallery-overlay flex-c-m trans-04">
                            <div class="gallery-content flex-w flex-c-m w-full">
                                <a class="flex-c-m gallery-btn m-all-5 trans-04 js-show-gallery" href="/client/images/gallery-06.jpg">
                                    <img src="/client/images/icons/icon-open.png" alt="OPEN">
                                </a>

                                <a href="#" class="flex-c-m gallery-btn m-all-5 trans-04">
                                    <img src="/client/images/icons/icon-link.png" alt="LINK">
                                </a>

                                <div class="gallery-txt flex-col-c p-rl-15 p-t-10 trans-04">
                                    <span class="txt-m-109 cl0 txt-center">
										Nam libero tempore
									</span>

                                    <span class="txt-s-106 cl0 txt-center">
										Vegetable
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-w flex-c p-t-40">
                <a href="#" class="flex-c-m txt-s-103 cl0 size-a-15 how-btn1 bg10 hov-btn2 trans-04">
                    Read more
                    <span class="lnr lnr-chevron-right m-l-7"></span>
                    <span class="lnr lnr-chevron-right"></span>
                </a>
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
                    <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10 how-active1" data-filter="*">
                        All Products
                    </button>

                    <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10" data-filter=".vegetable-fill">
                        Vegetable
                    </button>

                    <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10" data-filter=".fruit-fill">
                        Fruit
                    </button>

                    <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10" data-filter=".fruit-juic-fill">
                        Fruit Juic
                    </button>

                    <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10" data-filter=".dried-fill">
                        Dried
                    </button>

                    <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10" data-filter=".other-fill">
                        Other
                    </button>
                </div>
            </div>

            <div class="row isotope-grid">
                <!-- - -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item fruit-juic-fill other-fill">
                    <!-- Block1 -->
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                            <img src="/client/images/product-01.jpg" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
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

                                    <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                        <img class="icon-addwish-b1" src="/client/images/icons/icon-heart.png" alt="ICON">
                                        <img class="icon-addedwish-b1" src="/client/images/icons/icon-heart2.png" alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- - -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item fruit-fill">
                    <!-- Block1 -->
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                            <img src="/client/images/product-02.jpg" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
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

                                    <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                        <img class="icon-addwish-b1" src="/client/images/icons/icon-heart.png" alt="ICON">
                                        <img class="icon-addedwish-b1" src="/client/images/icons/icon-heart2.png" alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- - -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item vegetable-fill dried-fill other-fill">
                    <!-- Block1 -->
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                            <img src="/client/images/product-03.jpg" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
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

                                    <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                        <img class="icon-addwish-b1" src="/client/images/icons/icon-heart.png" alt="ICON">
                                        <img class="icon-addedwish-b1" src="/client/images/icons/icon-heart2.png" alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- - -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item vegetable-fill dried-fill">
                    <!-- Block1 -->
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                            <img src="/client/images/product-04.jpg" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
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

                                    <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                        <img class="icon-addwish-b1" src="/client/images/icons/icon-heart.png" alt="ICON">
                                        <img class="icon-addedwish-b1" src="/client/images/icons/icon-heart2.png" alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- - -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item fruit-fill fruit-juic-fill other-fill">
                    <!-- Block1 -->
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                            <img src="/client/images/product-05.jpg" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
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

                                    <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                        <img class="icon-addwish-b1" src="/client/images/icons/icon-heart.png" alt="ICON">
                                        <img class="icon-addedwish-b1" src="/client/images/icons/icon-heart2.png" alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- - -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item fruit-juic-fill">
                    <!-- Block1 -->
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                            <img src="/client/images/product-06.jpg" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
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

                                    <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                        <img class="icon-addwish-b1" src="/client/images/icons/icon-heart.png" alt="ICON">
                                        <img class="icon-addedwish-b1" src="/client/images/icons/icon-heart2.png" alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item vegetable-fill other-fill">
                    <!-- Block1 -->
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                            <img src="/client/images/product-07.jpg" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
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

                                    <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                        <img class="icon-addwish-b1" src="/client/images/icons/icon-heart.png" alt="ICON">
                                        <img class="icon-addedwish-b1" src="/client/images/icons/icon-heart2.png" alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- - -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item fruit-fill fruit-juic-fill">
                    <!-- Block1 -->
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                            <img src="/client/images/product-08.jpg" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
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

                                    <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                        <img class="icon-addwish-b1" src="/client/images/icons/icon-heart.png" alt="ICON">
                                        <img class="icon-addedwish-b1" src="/client/images/icons/icon-heart2.png" alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <section class="sec-product2 bg0 p-t-145 p-b-35">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-12 col-lg-4 p-b-20 m-rl-auto-md">
                    <div class="p-r-20 p-rl-0-xl p-b-45 p-t-5 s-full">
                        <div class="s-full bg-img1 flex-col-c p-t-60 p-b-300 p-rl-15" style="background-image: url(/client/images/bg-06.jpg);">
                            <span class="txt-center p-b-12">
								<span class="txt-m-102 cl3">
									organici
								</span>

                            <span class="txt-m-109 cl3">
									products
								</span>
                            </span>

                            <h4 class="txt-l-113 cl3 txt-center respon1">
                                Fresh lemon
                            </h4>

                            <div class="flex-w flex-c p-t-38">
                                <a href="shop-sidebar-list.html" class="flex-c-m txt-s-118 cl0 size-a-20 how-btn1 bg10 hov-btn2 trans-04">
                                    Shop now
                                    <span class="lnr lnr-chevron-right m-b-1 m-l-6"></span>
                                    <span class="lnr lnr-chevron-right m-b-1"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-6 col-lg-4 p-b-20 m-rl-auto-md">
                    <div class="p-rl-10 p-rl-0-xl">
                        <!-- slide2 -->
                        <div class="wrap-slick2">
                            <div class="p-b-20 p-rl-15">
                                <span class="txt-m-107 cl9">
									new form the farm
								</span>

                                <div class="flex-w flex-t p-t-5">
                                    <h4 class="size-w-5 m-r-20">
                                        <span class="txt-l-103 cl6">
											organic
										</span>

                                        <span class="txt-l-104 cl3">
											special
										</span>
                                    </h4>

                                    <div class="wrap-arrow-slick2 flex-w m-t-6"></div>
                                </div>
                            </div>

                            <div class="slick2">
                                <div class="item-slick2 p-all-15">
                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="/client/images/product-09.jpg" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
												Cabbage
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												21$
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="/client/images/product-10.jpg" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
												Carrot
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												17$
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="/client/images/product-11.jpg" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
												Onion
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												9$
											</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="item-slick2 p-all-15">
                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="/client/images/product-11.jpg" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
												Onion
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												9$
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="/client/images/product-09.jpg" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
												Cabbage
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												21$
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="/client/images/product-10.jpg" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
												Carrot
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												17$
											</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-6 col-lg-4 p-b-20 m-rl-auto-md">
                    <div class="p-l-20 p-rl-0-xl">
                        <!-- slide2 -->
                        <div class="wrap-slick2">
                            <div class="p-b-20 p-rl-15">
                                <span class="txt-m-107 cl9">
									agricultural products
								</span>

                                <div class="flex-w flex-t p-t-5">
                                    <h4 class="size-w-5 m-r-20">
                                        <span class="txt-l-103 cl6">
											organic
										</span>

                                        <span class="txt-l-104 cl3">
											popular
										</span>
                                    </h4>

                                    <div class="wrap-arrow-slick2 flex-w m-t-6"></div>
                                </div>
                            </div>

                            <div class="slick2">
                                <div class="item-slick2 p-all-15">
                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="/client/images/product-12.jpg" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
												Potato
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												24$
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="/client/images/product-13.jpg" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
												Eggplant
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												18$
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="/client/images/product-14.jpg" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
												Peas
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												35$
											</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="item-slick2 p-all-15">
                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="/client/images/product-13.jpg" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
												Eggplant
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												18$
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="/client/images/product-14.jpg" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
												Peas
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												35$
											</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
