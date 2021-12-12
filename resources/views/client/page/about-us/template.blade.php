@extends('client.master-template')
@section('title')
@endsection
@section('css-page')
@include('client.page.about-us.css')
@endsection
@section('content-page')
{{--    title page --}}
@include('client.include.title-page',['title'=>'Giới thiệu công ty'])
<!-- Story -->
<section class="sec-story bg0 p-t-150 p-b-100">
    <div class="container">
        <div class="flex-w flex-sb-t">
            <div class="size-w-31 wrap-pic-w how-shadow2 bo-all-15 bocl0 w-full-md">
                <img src="https://res.cloudinary.com/dark-faith/image/upload/v1639135841/78229800_104911967646739_827521424913596416_n.jpg_yw6q4c.jpg" alt="IMG">
            </div>

            <div class="size-w-32 p-t-43 w-full-md">
                <h3 class="txt-center txt-l-401 cl15 p-b-44">
                    Vì sao lại là Cần Rau
                </h3>

                <p class="txt-center txt-m-115 cl6 p-b-25">
                    Trong một đêm gió lạnh khi đang ngồi lập trình cho trang Web bán rau, tôi bỗng bồi hồi nhớ lại cái quảng cáo điện máy xanh.
                    Cái quảng cáo giúp thu hút cả đống lượt xem cho dù tôi chưa bao giờ đến điện máy xanh để mua Ti Vi, thế nhưng tôi
                    nhắn nhủ mình rằng, nếu có ý định mua ti vi thì hãy đến điện máy xanh.
                </p>

                <p class="txt-center txt-m-115 cl6 p-b-25">
                    Nhưng nếu thế thì vẫn chưa đủ. Thế giới loạn lạc sau những ngày tháng Covid, ta loạn lạc trong những ngày dài chờ tiêm. Con người thay đổi
                    để thích ứng với hoàn cảnh, chúng ta dần chuyển mình qua hình thức đặt hàng trên mạng, một hình thức đầy tiềm năng cho cả người bán và người mua.
                    Vì thế trang web CẦN RAU được sinh ra, với cách bán hàng là thu nhập rau từ trang trại về để bán cho người tiêu dùng.
                    Đây là một trang web nhỏ bé, ý tưởng nhỏ bé, mang theo niềm tin và hy vọng gánh và sứ mệnh đó là có thể mang đi bán rau.
                    Người mua vui, mà người bán cũng vui.
                </p>

                <p class="txt-center txt-m-115 cl6 p-b-25">
                    Hiện tại trang web này vẫn còn đang phát triển, hướng tới đầy đủ luồng tính năng cho một trang web bán hàng
                    hãy chờ đợi...
                    <br>
                    <br>

                    <span class="txt-m-401 cl10 p-b-2">
								Nguyễn Tùng Bách
							</span>
                    <br><span class="txt-s-106 cl6">
								Một người lên ý tưởng cho trang web cho hay
							</span>
                </p>

            </div>
        </div>
    </div>
</section>

<!-- We Bring -->
<section class="sec-bring bg-img1 p-t-145 p-b-100" style="background-image: url(/client/images/bg-02.jpg);">
    <div class="container">
        <div class="size-a-1 flex-col-c-m p-b-40">
            <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                Thực Phẩm Luôn Tươi Mới

                <div class="how-pos1">
                    <img src="/client/images/icons/symbol-02.png" alt="IMG">
                </div>
            </div>

            <h3 class="txt-center txt-l-101 cl3 respon1">
                Chúng Tôi Luôn Mang Đến Thực Phẩm Sạch
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
                            100% Hữu cơ
                        </div>

                        <div class="size-w-25 flex-r-m respon6-02">
                            <img src="/client/images/icons/symbol-20.png" alt="SYMBOL">
                        </div>

                        <p class="txt-right txt-s-101 cl6 p-t-7 respon6-03">
                            Những sản phẩm được nuôi trồng tự nhiên, không sử dụng chất hoá học
                        </p>
                    </div>
                </div>

                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-s w-full-lg">
                        <div class="size-w-25 flex-m">
                            <img src="/client/images/icons/symbol-23.png" alt="SYMBOL">
                        </div>

                        <div class="size-w-26 flex-m txt-m-109 cl3">
                            An Toàn Thực Phẩm
                        </div>

                        <p class="txt-s-101 cl6 p-t-7">
                            Sử dụng những phương pháp chuyên môn để thực phẩm luôn được an toàn và vệ sinh sạch sẽ.
                        </p>
                    </div>
                </div>

                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-c p-r-6 w-full-lg">
                        <div class="size-w-26 flex-r-m txt-right txt-m-109 cl3 respon6-01">
                            Gia Đình Khoẻ Mạnh
                        </div>

                        <div class="size-w-25 flex-r-m respon6-02">
                            <img src="/client/images/icons/symbol-21.png" alt="SYMBOL">
                        </div>

                        <p class="txt-right txt-s-101 cl6 p-t-7 respon6-03">
                            Khi sử dụng sản phẩm không lo ảnh hưởng đến sức khoẻ gia đình bạn
                        </p>
                    </div>
                </div>

                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-c p-l-6 w-full-lg">
                        <div class="size-w-25 flex-m">
                            <img src="/client/images/icons/symbol-24.png" alt="SYMBOL">
                        </div>

                        <div class="size-w-26 flex-m txt-m-109 cl3">
                            Chất Lượng Tốt Nhất
                        </div>

                        <p class="txt-s-101 cl6 p-t-7">
                            Sản phẩm với chất lượng tốt nhất mới đem bán
                        </p>
                    </div>
                </div>

                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-s w-full-lg">
                        <div class="size-w-26 flex-r-m txt-right txt-m-109 cl3 respon6-01">
                           Luôn Tươi Mới
                        </div>

                        <div class="size-w-25 flex-r-m respon6-02">
                            <img src="/client/images/icons/symbol-22.png" alt="SYMBOL">
                        </div>

                        <p class="txt-right txt-s-101 cl6 p-t-7 respon6-03">
                            Thu hoạch ngay tại trang trại và đem đi phân phối luôn nên thực phẩm luôn trong tình trạng tươi mới
                        </p>
                    </div>
                </div>

                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-e w-full-lg">
                        <div class="size-w-25 flex-m">
                            <img src="/client/images/icons/symbol-25.png" alt="SYMBOL">
                        </div>

                        <div class="size-w-26 flex-m txt-m-109 cl3">
                            Chất Lượng Premiun
                        </div>

                        <p class="txt-s-101 cl6 p-t-7">
                            Sản phẩm luôn ở chất lượng cao nhất khi đem bán
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
                Đội ngũ trang trại

                <div class="how-pos1">
                    <img src="/client/images/icons/symbol-02.png" alt="IMG">
                </div>
            </div>

            <h3 class="txt-center txt-l-101 cl3 respon1">
                Những người nông dân của chúng tôi
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

    @include('client.plugin.plugin')
@endsection
