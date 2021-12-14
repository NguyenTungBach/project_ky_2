@extends('client.master-template')
@section('title')
    <title>Phản hồi</title>
@endsection
@section('css-page')
    @include('client.page.contact.css')
    <link rel="stylesheet" href="/css/jquery.toast.min.css">
    <style>
        .error-input {
            border: 1px solid red !important;
        }

        .success-input {
            border: none !important;
        }

        .message-error {
            font-size: 13px;
            padding-left: 5px;
        }
    </style>
@endsection
@section('content-page')
    {{--    title page --}}
    @include('client.include.title-page',['title'=>'Phản hồi'])

    <!-- Form Contact -->
    <section class="container bg0 p-t-150 p-b-90">
        <div class="row">
            <div class="col-sm-10 col-md-6 col-lg-5 m-rl-auto p-b-10">
                <div class="h-full how5 m-r--30 m-r-0-lg m-l-15-xl">
                    <div class="bg-img3 h-full respon18" style="background-image: url(/client/images/other-18.jpg);"></div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-7 m-rl-auto p-b-10">
                <div class="p-t-75 p-l-70 p-rl-0-lg">
                    <div class="size-a-1 flex-col-l p-b-70">
                        <div class="txt-m-201 cl10 how-pos1-parent m-b-14">
                            Phản hồi để web tốt hơn

                            <div class="how-pos1">
                                <img src="/client/images/icons/symbol-02.png" alt="IMG">
                            </div>
                        </div>

                        <h3 class="txt-l-101 cl3 respon1">
                            Đóng góp ý kiến!
                        </h3>
                    </div>

                    <form class="validate-form" method="post" name="contact">
                        <div class="row">
                            <div class="col-lg-6 p-b-20">
                                <div class="m-r--5 m-rl-0-lg">
                                    <input class="txt-s-115 cl3 plh1 size-a-25 bo-all-1 bocl15 focus1 p-rl-20" type="text"
                                           name="name" placeholder="Nhập tên của bạn *">
                                    <span class="cl12 message-error error_name"></span>
                                </div>
                            </div>

                            <div class="col-lg-6 p-b-20">
                                <div class="m-l--5 m-rl-0-lg ">
                                    <input class="txt-s-115 cl3 plh1 size-a-25 bo-all-1 bocl15 focus1 p-rl-20" type="text"
                                           name="email" placeholder="Email của bạn *">
                                    <span class="cl12 message-error error_email"></span>
                                </div>
                            </div>

                            <div class="col-lg-6 p-b-20">
                                <div class="m-r--5 m-rl-0-lg">
                                    <input class="txt-s-115 cl3 plh1 size-a-25 bo-all-1 bocl15 focus1 p-rl-20" type="text"
                                           name="address" placeholder="Địa chỉ">
                                    <span class="cl12 message-error error_address"></span>
                                </div>
                            </div>

                            <div class="col-lg-6 p-b-20">
                                <div class="m-l--5 m-rl-0-lg">
                                    <input class="txt-s-115 cl3 plh1 size-a-25 bo-all-1 bocl15 focus1 p-rl-20" type="text"
                                           name="phone" placeholder="Số điện thoại *">
                                    <span class="cl12 message-error error_phone"></span>
                                </div>
                            </div>

                            <div class="col-12 p-b-20">
                                <div>
                                <textarea class="txt-s-115 cl3 plh1 size-a-48 bo-all-1 bocl15 focus1 p-rl-20 p-tb-10"
                                          name="message" placeholder="Lời nhắn"></textarea>
                                    <span class="cl12 message-error error_message"></span>
                                </div>
                            </div>
                        </div>

                        <div class="flex-l p-t-10">
                            <button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04">
                                Gửi ngay
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="how-pos2-parent">
        <div class="map how-pos2 s-full respon19">
            <div class="contact-map h-full" id="google_map" data-map-x="19.420967" data-map-y="-99.162822"
                 data-scrollwhell="0" data-draggable="1" data-zoom="15"></div>
        </div>

        <div class="container pointer-e-none">
            <div class="m-rl--15 flex-r">
                <div class="pointer-e-auto size-a-49 bg10 p-rl-40 p-t-50 p-b-30 w-full-lg p-rl-15-ssm">
                    <h4 class="txt-l-108 cl0 p-b-18">
                        Thông tin nơi phản hồi
                    </h4>

                    <p class="txt-s-101 cl0">
                        Văn Miếu
                    </p>

                    <ul class="p-t-44">
                        <li class="flex-m p-b-20">
                            <div class="wrap-pic-max-w size-w-73 m-r-20">
                                <img src="/client/images/icons/icon-address-02.png" alt="IMG">
                            </div>

                            <span class="size-w-74 txt-s-101 cl0">
								8901
							</span>
                        </li>

                        <li class="flex-m p-b-20">
                            <div class="wrap-pic-max-w size-w-73 m-r-20">
                                <img src="/client/images/icons/icon-phone-04.png" alt="IMG">
                            </div>

                            <span class="size-w-74 txt-s-101 cl0">
								(426) 460 8668
								<br>
								(317) 799 7654
							</span>
                        </li>

                        <li class="flex-m p-b-20">
                            <div class="wrap-pic-max-w size-w-73 m-r-20">
                                <img src="/client/images/icons/icon-mail-04.png" alt="IMG">
                            </div>

                            <span class="size-w-74 txt-s-101 cl0">
								kevin.price@example.com
								<br>
								ryanpatel@example.com
							</span>
                        </li>

                        <li class="flex-m p-b-20">
                            <div class="wrap-pic-max-w size-w-73 m-r-20">
                                <img src="/client/images/icons/icon-web-02.png" alt="IMG">
                            </div>

                            <span class="size-w-74 txt-s-101 cl0">
								www.canrau.com
							</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js-page')
@include('client.page.contact.js')
    <script src="/js/jquery.toast.min.js"></script>
    <script>
        $(document).ready(function () {
            const name = $('input[name=name]');
            const email = $('input[name=email]');
            const address = $('input[name=address]');
            const phone = $('input[name=phone]');
            const messageValid = $('textarea[name=message]');

            function isVietnamesePhoneNumber(number) {
                return /(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b/.test(number);
            }

            function validateEmail(email) {
                const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            }
            $('form[name=contact]').submit(function (event) {
                let message = [];
                if (name.val() === '' || name.val() == null) {
                    message.push('Yêu cầu nhập tên người gửi\n');
                    $('.error_name').html(`<i class="fa fa-info-circle mr-1"></i>Yêu cầu nhập tên người nhận`);
                    name.addClass('error-input');
                } else {
                    $('.error_name').text("");
                    name.addClass('success-input')
                }

                if (email.val() === '' || email.val() == null) {
                    let errorEmail = $('.error_email');
                    message.push('Yêu cầu nhập Email\n');
                    errorEmail.html(`<i class="fa fa-info-circle mr-1"></i>Yêu cầu nhập Email`);
                    email.addClass('error-input');
                } else {
                    if (!validateEmail(email.val())) {
                        message.push('Đây không phải Email\n');
                        $('.error_email').html(`<i class="fa fa-info-circle mr-1"></i>Đây không phải Email`);
                        email.addClass('error-input')
                    } else {
                        $('.error_email').text("");
                        email.addClass('success-input')
                    }
                }

                if (address.val() === '' || address.val() == null) {
                    message.push('Yêu cầu nhập địa chỉ\n');
                    $('.error_address').html(`<i class="fa fa-info-circle mr-1"></i>Yêu cầu nhập địa chỉ`);
                    address.addClass('error-input');
                } else {
                    $('.error_address').text("");
                    address.addClass('success-input')
                }

                if (phone.val() === '' || phone.val() == null) {
                    message.push('Yêu cầu nhập số điện thoại\n');
                    $('.error_phone').html(`<i class="fa fa-info-circle mr-1"></i>Yêu cầu nhập số điện thoại`);
                    phone.addClass('error-input')
                } else {
                    if (!isVietnamesePhoneNumber(phone.val())) {
                        message.push('Đây không phải số điện thoại Việt Nam\n');
                        $('.error_phone').html(`<i class="fa fa-info-circle mr-1"></i>Đây không phải số điện thoại Việt Nam`);
                        phone.addClass('error-input')
                    } else {
                        $('.error_phone').text("");
                        phone.addClass('success-input')
                    }
                }

                if (messageValid.val() === '' || messageValid.val() == null) {
                    message.push('Yêu cầu nhập phản hồi\n');
                    $('.error_message').html(`<i class="fa fa-info-circle mr-1"></i>Yêu cầu nhập phản hồi`);
                    messageValid.addClass('error-input');
                } else {
                    $('.error_message').text("");
                    messageValid.addClass('success-input')
                }

                if (message.length > 0) {
                    event.preventDefault();
                    return false;
                }

                let data = {
                    name: name.val(),
                    email: email.val(),
                    address: address.val(),
                    phone: phone.val(),
                    message: messageValid.val(),
                }

                event.preventDefault();
                $.ajax({
                    // url: 'http://127.0.0.1:8000/contact',
                    url: "{{route('client.contact')}}",
                    type: 'POST',
                    data: JSON.stringify(data),
                    success: function (data) {
                        console.log("console log thành công: ",JSON.parse(data))
                        $.toast({
                            heading: 'Success',
                            text: 'Gửi phản hồi thành công, chúng tôi sẽ báo lại cho bạn sau',
                            showHideTransition: 'slide',
                            icon: 'success',
                            position: 'top-right'
                        })
                        setTimeout(function () {
                            window.location.reload(false);
                        }, 3000);

                    },
                    error: function (request, error) {
                        console.log("Request: " + JSON.parse(request));
                        function messageError() {
                            $.toast({
                                heading: 'Error',
                                text: 'Gửi phản hồi thất bại',
                                icon: 'error',
                            });
                        }
                    }
                });

            });

        });
    </script>

    @include('client.plugin.plugin')
@endsection

