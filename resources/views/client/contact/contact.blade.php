
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    @include('client.include.header.css')
</head>
<body class="animsition">

<!-- Header -->
@include('client.include.header.header')

<!-- Title page -->
<section class="how-overlay2 bg-img1" style="background-image: url(images/bg-07.jpg);">
    <div class="container">
        <div class="txt-center p-t-160 p-b-165">
            <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                Contact
            </h2>

            <span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="index.html" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Home
					</a>

					<span>
						/ Contact
					</span>
				</span>
        </div>
    </div>
</section>

<!-- Form Contact -->
<section class="container bg0 p-t-150 p-b-90">
    <div class="row">
        <div class="col-sm-10 col-md-6 col-lg-5 m-rl-auto p-b-10">
            <div class="h-full how5 m-r--30 m-r-0-lg m-l-15-xl">
                <div class="bg-img3 h-full respon18" style="background-image: url(images/other-18.jpg);"></div>
            </div>
        </div>

        <div class="col-sm-10 col-md-6 col-lg-7 m-rl-auto p-b-10">
            <div class="p-t-75 p-l-70 p-rl-0-lg">
                <div class="size-a-1 flex-col-l p-b-70">
                    <div class="txt-m-201 cl10 how-pos1-parent m-b-14">
                        Get In Touch

                        <div class="how-pos1">
                            <img src="images/icons/symbol-02.png" alt="IMG">
                        </div>
                    </div>

                    <h3 class="txt-l-101 cl3 respon1">
                        Leave us a message!
                    </h3>
                </div>

                <form id="contact-form" class="validate-form" method="post" action="includes/contact-form.php" name="contact">
                    <div class="row">
                        <div class="col-lg-6 p-b-20">
                            <div class="m-r--5 m-rl-0-lg validate-input" data-validate = "Name is required">
                                <input class="txt-s-115 cl3 plh1 size-a-25 bo-all-1 bocl15 focus1 p-rl-20" type="text" name="name" placeholder="Your Full Name *">
                            </div>
                        </div>

                        <div class="col-lg-6 p-b-20">
                            <div class="m-l--5 m-rl-0-lg validate-input" data-validate = "Valid email is: ex@abc.xyz">
                                <input class="txt-s-115 cl3 plh1 size-a-25 bo-all-1 bocl15 focus1 p-rl-20" type="text" name="email" placeholder="Your Email *">
                            </div>
                        </div>

                        <div class="col-lg-6 p-b-20">
                            <div class="m-r--5 m-rl-0-lg">
                                <input class="txt-s-115 cl3 plh1 size-a-25 bo-all-1 bocl15 focus1 p-rl-20" type="text" name="address" placeholder="Your Address">
                            </div>
                        </div>

                        <div class="col-lg-6 p-b-20">
                            <div class="m-l--5 m-rl-0-lg validate-input" data-validate = "Phone is required">
                                <input class="txt-s-115 cl3 plh1 size-a-25 bo-all-1 bocl15 focus1 p-rl-20" type="text" name="phone" placeholder="Your Phone *">
                            </div>
                        </div>

                        <div class="col-12 p-b-20">
                            <div class="validate-input" data-validate = "Message is required">
                                <textarea class="txt-s-115 cl3 plh1 size-a-48 bo-all-1 bocl15 focus1 p-rl-20 p-tb-10" name="msg" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="flex-l p-t-10">
                        <button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04">
                            Send us now
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Ccontact -->
<section class="how-pos2-parent">
    <div class="map how-pos2 s-full respon19">
        <div class="contact-map h-full" id="google_map" data-map-x="19.420967" data-map-y="-99.162822" data-scrollwhell="0" data-draggable="1"  data-zoom="15"></div>
    </div>

    <div class="container pointer-e-none">
        <div class="m-rl--15 flex-r">
            <div class="pointer-e-auto size-a-49 bg10 p-rl-40 p-t-50 p-b-30 w-full-lg p-rl-15-ssm">
                <h4 class="txt-l-108 cl0 p-b-18">
                    Contact info
                </h4>

                <p class="txt-s-101 cl0">
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.
                </p>

                <ul class="p-t-44">
                    <li class="flex-m p-b-20">
                        <div class="wrap-pic-max-w size-w-73 m-r-20">
                            <img src="images/icons/icon-address-02.png" alt="IMG">
                        </div>

                        <span class="size-w-74 txt-s-101 cl0">
								8901 Marmora Road, Glasgow, D04 89GR
							</span>
                    </li>

                    <li class="flex-m p-b-20">
                        <div class="wrap-pic-max-w size-w-73 m-r-20">
                            <img src="images/icons/icon-phone-04.png" alt="IMG">
                        </div>

                        <span class="size-w-74 txt-s-101 cl0">
								(426) 460 8668
								<br>
								(317) 799 7654
							</span>
                    </li>

                    <li class="flex-m p-b-20">
                        <div class="wrap-pic-max-w size-w-73 m-r-20">
                            <img src="images/icons/icon-mail-04.png" alt="IMG">
                        </div>

                        <span class="size-w-74 txt-s-101 cl0">
								kevin.price@example.com
								<br>
								ryanpatel@example.com
							</span>
                    </li>

                    <li class="flex-m p-b-20">
                        <div class="wrap-pic-max-w size-w-73 m-r-20">
                            <img src="images/icons/icon-web-02.png" alt="IMG">
                        </div>

                        <span class="size-w-74 txt-s-101 cl0">
								www.organive.store.com
							</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>



<!-- Logo -->
<div class="sec-logo bg0">
    <div class="container">
        <div class="flex-w flex-sa-m p-tb-60">
            <a href="#" class="dis-block how2 p-rl-15 m-tb-20">
                <img class="trans-04" src="images/icons/symbol-07.png" alt="IMG">
            </a>

            <a href="#" class="dis-block how2 p-rl-15 m-tb-20">
                <img class="trans-04" src="images/icons/symbol-08.png" alt="IMG">
            </a>

            <a href="#" class="dis-block how2 p-rl-15 m-tb-20">
                <img class="trans-04" src="images/icons/symbol-09.png" alt="IMG">
            </a>

            <a href="#" class="dis-block how2 p-rl-15 m-tb-20">
                <img class="trans-04" src="images/icons/symbol-10.png" alt="IMG">
            </a>

            <a href="#" class="dis-block how2 p-rl-15 m-tb-20">
                <img class="trans-04" src="images/icons/symbol-11.png" alt="IMG">
            </a>
        </div>
    </div>
</div>

<!-- Subscribe -->
<section class="sec-subscribe bg13 p-t-65 p-b-65">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-tb-15">
                <div class="h-full flex-col-m">
                    <h4 class="txt-m-110 cl3 p-b-4">
                        Subscribe Newsletter.
                    </h4>

                    <p class="txt-s-101 cl6">
                        Get e-mail updates about our latest shop and special offers.
                    </p>
                </div>
            </div>

            <div class="col-md-7 p-tb-15">
                <form class="flex-w flex-m h-full">
                    <input class="size-a-6 txt-s-106 cl6 plh0 p-rl-30 w-full-sm" type="text" name="email" placeholder="Your email address">
                    <button class="bg10 size-a-5 txt-s-107 cl0 p-rl-15 trans-04 hov-btn2 mt-4 mt-sm-0">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@include('client.include.footer.footer')


<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="lnr lnr-chevron-up"></span>
		</span>
</div>
@include('client.include.footer.js')

</body>
</html>
