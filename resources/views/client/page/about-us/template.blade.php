@extends('client.master-template')
@section('title')
@endsection
@section('css-page')
@include('client.page.about-us.css')
@endsection
@section('content-page')
{{--    title page --}}
@include('client.include.title-page',['title'=>'About Us'])
<!-- Story -->
<section class="sec-story bg0 p-t-150 p-b-100">
    <div class="container">
        <div class="flex-w flex-sb-t">
            <div class="size-w-31 wrap-pic-w how-shadow2 bo-all-15 bocl0 w-full-md">
                <img src="/client/images/other-09.jpg" alt="IMG">
            </div>

            <div class="size-w-32 p-t-43 w-full-md">
                <h3 class="txt-center txt-l-401 cl15 p-b-44">
                    Story from our farm
                </h3>

                <p class="txt-center txt-m-115 cl6 p-b-25">
                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                    born and I will give you a complete account of the system, and expound the actual teachings of the
                    great explorer of the truth, the master.
                </p>

                <p class="txt-center txt-m-115 cl6 p-b-25">
                    Builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is
                    pleasure, but because those who do not know how to.
                </p>

                <p class="txt-center txt-m-115 cl6 p-b-25">
                    Pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there
                    anyone who loves or pursues or desires to obtain pain of itself, be-cause it is pain, but because
                    occasionally circumstances occur.
                    <br>Which toil and pain can procure him some great pleasure.
                </p>

                <div class="flex-w flex-c-b p-t-50 p-t-30">

                    <div class="flex-col-l p-b-5">
							<span class="txt-m-401 cl10 p-b-2">
								Jennifer Watson
							</span>

                        <span class="txt-s-106 cl6">
								Director of the farm
							</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- We Bring -->
<section class="sec-bring bg-img1 p-t-145 p-b-100" style="background-image: url(/client/images/bg-02.jpg);">
    <div class="container">
        <div class="size-a-1 flex-col-c-m p-b-40">
            <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                Food Is Always Fresh

                <div class="how-pos1">
                    <img src="/client/images/icons/symbol-02.png" alt="IMG">
                </div>
            </div>

            <h3 class="txt-center txt-l-101 cl3 respon1">
                We bring clean food
            </h3>
        </div>

        <div class="how-pos6-parent">
            <!--  -->
            <div class="flex-c-b how-pos6 dis-none-lg">
                <div class="size-w-28 wrap-pic-max-s w-full-sm">
                    <img src="/client/images/other-07.png" alt="IMG">
                </div>
            </div>


            <!--  -->
            <div class="flex-w flex-sb m-rl--15 m-rl-0-lg respon20">
                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-e w-full-lg">
                        <div class="size-w-26 flex-r-m txt-right txt-m-109 cl3 respon6-01">
                            100% Organic
                        </div>

                        <div class="size-w-25 flex-r-m respon6-02">
                            <img src="/client/images/icons/symbol-20.png" alt="SYMBOL">
                        </div>

                        <p class="txt-right txt-s-101 cl6 p-t-7 respon6-03">
                            It is a long established fact that a reader will be distracted by the readable.
                        </p>
                    </div>
                </div>

                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-s w-full-lg">
                        <div class="size-w-25 flex-m">
                            <img src="/client/images/icons/symbol-23.png" alt="SYMBOL">
                        </div>

                        <div class="size-w-26 flex-m txt-m-109 cl3">
                            Food Safety
                        </div>

                        <p class="txt-s-101 cl6 p-t-7">
                            It is a long established fact that a reader will be distracted by the readable.
                        </p>
                    </div>
                </div>

                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-c p-r-6 w-full-lg">
                        <div class="size-w-26 flex-r-m txt-right txt-m-109 cl3 respon6-01">
                            Family Healthy
                        </div>

                        <div class="size-w-25 flex-r-m respon6-02">
                            <img src="/client/images/icons/symbol-21.png" alt="SYMBOL">
                        </div>

                        <p class="txt-right txt-s-101 cl6 p-t-7 respon6-03">
                            It is a long established fact that a reader will be distracted by the readable.
                        </p>
                    </div>
                </div>

                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-c p-l-6 w-full-lg">
                        <div class="size-w-25 flex-m">
                            <img src="/client/images/icons/symbol-24.png" alt="SYMBOL">
                        </div>

                        <div class="size-w-26 flex-m txt-m-109 cl3">
                            Best Quality
                        </div>

                        <p class="txt-s-101 cl6 p-t-7">
                            It is a long established fact that a reader will be distracted by the readable.
                        </p>
                    </div>
                </div>

                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-s w-full-lg">
                        <div class="size-w-26 flex-r-m txt-right txt-m-109 cl3 respon6-01">
                            Always Fresh
                        </div>

                        <div class="size-w-25 flex-r-m respon6-02">
                            <img src="/client/images/icons/symbol-22.png" alt="SYMBOL">
                        </div>

                        <p class="txt-right txt-s-101 cl6 p-t-7 respon6-03">
                            It is a long established fact that a reader will be distracted by the readable.
                        </p>
                    </div>
                </div>

                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-e w-full-lg">
                        <div class="size-w-25 flex-m">
                            <img src="/client/images/icons/symbol-25.png" alt="SYMBOL">
                        </div>

                        <div class="size-w-26 flex-m txt-m-109 cl3">
                            Premiun Quality
                        </div>

                        <p class="txt-s-101 cl6 p-t-7">
                            It is a long established fact that a reader will be distracted by the readable.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Our farmers -->
<section class="sec-farmer bg0 p-t-145 p-b-70">
    <div class="container">
        <div class="size-a-1 flex-col-c-m p-b-70">
            <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                The Best Farmers

                <div class="how-pos1">
                    <img src="/client/images/icons/symbol-02.png" alt="IMG">
                </div>
            </div>

            <h3 class="txt-center txt-l-101 cl3 respon1">
                Our farmers
            </h3>
        </div>


        <div class="row">
            <div class="col-sm-8 col-md-4 p-b-30 m-rl-auto">
                <div class="hov10 trans-04">
                    <a href="#" class="hov-img0">
                        <img src="/client/images/farmer-01.jpg" alt="IMG">
                    </a>

                    <div class="flex-col-c-m bg0 p-rl-15 p-t-37 p-b-35">
                        <a href="#" class="txt-m-114 cl3 txt-center hov-cl10 trans-04 p-b-9">
                            Kenneth Snyder
                        </a>

                        <span class="txt-s-101 cl6 txt-center">
								Vegetables
							</span>

                        <div class="flex-w flex-c-m p-t-30">
                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="/client/images/icons/icon-instagram.png" alt="instagram">
                                <img class="ab-t-l hov6-child2 trans-04" src="/client/images/icons/icon-instagram2.png"
                                     alt="instagram">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="/client/images/icons/icon-twitter.png" alt="twitter">
                                <img class="ab-t-l hov6-child2 trans-04" src="/client/images/icons/icon-twitter2.png"
                                     alt="twitter">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="/client/images/icons/icon-google.png" alt="google">
                                <img class="ab-t-l hov6-child2 trans-04" src="/client/images/icons/icon-google2.png"
                                     alt="google">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="/client/images/icons/icon-facebook.png" alt="facebook">
                                <img class="ab-t-l hov6-child2 trans-04" src="/client/images/icons/icon-facebook2.png"
                                     alt="facebook">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-md-4 p-b-30 m-rl-auto">
                <div class="hov10 trans-04">
                    <a href="#" class="hov-img0">
                        <img src="/client/images/farmer-02.jpg" alt="IMG">
                    </a>

                    <div class="flex-col-c-m bg0 p-rl-15 p-t-37 p-b-35">
                        <a href="#" class="txt-m-114 cl3 txt-center hov-cl10 trans-04 p-b-9">
                            Denise Hoffman
                        </a>

                        <span class="txt-s-101 cl6 txt-center">
								Vegetables
							</span>

                        <div class="flex-w flex-c-m p-t-30">
                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="/client/images/icons/icon-instagram.png" alt="instagram">
                                <img class="ab-t-l hov6-child2 trans-04" src="/client/images/icons/icon-instagram2.png"
                                     alt="instagram">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="/client/images/icons/icon-twitter.png" alt="twitter">
                                <img class="ab-t-l hov6-child2 trans-04" src="/client/images/icons/icon-twitter2.png"
                                     alt="twitter">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="/client/images/icons/icon-google.png" alt="google">
                                <img class="ab-t-l hov6-child2 trans-04" src="/client/images/icons/icon-google2.png"
                                     alt="google">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="/client/images/icons/icon-facebook.png" alt="facebook">
                                <img class="ab-t-l hov6-child2 trans-04" src="/client/images/icons/icon-facebook2.png"
                                     alt="facebook">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-md-4 p-b-30 m-rl-auto">
                <div class="hov10 trans-04">
                    <a href="#" class="hov-img0">
                        <img src="/client/images/farmer-03.jpg" alt="IMG">
                    </a>

                    <div class="flex-col-c-m bg0 p-rl-15 p-t-37 p-b-35">
                        <a href="#" class="txt-m-114 cl3 txt-center hov-cl10 trans-04 p-b-9">
                            Carl Herrera
                        </a>

                        <span class="txt-s-101 cl6 txt-center">
								Vegetables
							</span>

                        <div class="flex-w flex-c-m p-t-30">
                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="/client/images/icons/icon-instagram.png" alt="instagram">
                                <img class="ab-t-l hov6-child2 trans-04" src="/client/images/icons/icon-instagram2.png"
                                     alt="instagram">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="/client/images/icons/icon-twitter.png" alt="twitter">
                                <img class="ab-t-l hov6-child2 trans-04" src="/client/images/icons/icon-twitter2.png"
                                     alt="twitter">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="/client/images/icons/icon-google.png" alt="google">
                                <img class="ab-t-l hov6-child2 trans-04" src="/client/images/icons/icon-google2.png"
                                     alt="google">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="/client/images/icons/icon-facebook.png" alt="facebook">
                                <img class="ab-t-l hov6-child2 trans-04" src="/client/images/icons/icon-facebook2.png"
                                     alt="facebook">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('js-page')
    @include('client.page.about-us.js')
@endsection
