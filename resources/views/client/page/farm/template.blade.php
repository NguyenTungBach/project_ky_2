<!DOCTYPE html>
<html lang="en">
<head>
    @include('client.page.farm.css')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body, h1, h2, h3, h4, h5 {
            font-family: "Poppins", sans-serif
        }

        body {
            font-size: 16px;
            background-color: #f3f5f6
        }

        .w3-half img {
            margin-bottom: -6px;
            margin-top: 16px;
            opacity: 0.8;
            cursor: pointer
        }

        .w3-half img:hover {
            opacity: 1
        }
        .bg-custom{
            background-color: #ffffff;
        }
        .custom div .w3-white .w3-button {
            border: 1px rgba(205, 205, 205, 0.44) solid;
        }
        .custom{
            position: -webkit-sticky; /* Safari */
            position: sticky;
            top: 107px;
        }
        .padding-home-farm{
            padding: 0 50px;
        }
        .middle-farms{
            display: none;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="/client/css/custom-client.css">
</head>
<body class="animsition">

<!-- Header -->
@include('client.include.header')


<!-- Page Container -->
<div class="padding-home-farm" style="background-color: #f3f5f6;">
    <!-- The Grid -->
    <div class="w3-row">
        <!-- Left Column -->
        <div class="w3-col m3 custom">
            <!-- Accordion -->
            <div class="w3-card w3-round mb-3">
                <div class="w3-white">
                    <button class="w3-button w3-block bg-custom  w3-left-align"><i
                            class="fa fa-home  fa-fw w3-margin-right"></i> Timeline
                    </button>
                    <button class="w3-button w3-block bg-custom  w3-left-align"><i
                            class="fa fa-list  fa-fw w3-margin-right"></i> Farms
                    </button>
                    <button class="w3-button w3-block bg-custom  w3-left-align"><i
                            class="fa fa-users  fa-fw w3-margin-right"></i> My Photos
                    </button>
                </div>
            </div>
            <!-- Profile -->
            <div class="w3-card w3-round w3-white">
                <div class="w3-container">
                    <h4 class="w3-center">My Profile</h4>
                    <p class="w3-center"><img src="/image/admin.gif" class="w3-circle"
                                              style="height:106px;width:106px" alt="Avatar"></p>
                    <hr>
                    <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Developer</p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i>Hung Yen, Viet Nam</p>
                    <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> 13/03/1996</p>
                </div>
            </div>

            <!-- End Left Column -->
        </div>

        <!-- Middle Column -->
        <div class="w3-col m7 middle-timeline" style=" margin-top: 18px">

            <div class="w3-row-padding">
                <div class="w3-col m12">
                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <h6 class="w3-opacity">Social Media template by w3.css</h6>
                            <p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>
                            <button  type="button" class="btn btn-success mt-2"><i class="fa fa-pencil"></i>  Post</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                <img src="/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right"
                     style="width:60px">
                <span class="w3-right w3-opacity">1 min</span>
                <h4>John Doe</h4><br>
                <hr class="w3-clear">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
                <div class="w3-row-padding" style="margin:0 -16px">
                    <div class="w3-half">
                        <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights"
                             class="w3-margin-bottom">
                    </div>
                    <div class="w3-half">
                        <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
                    </div>
                </div>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>
                     Like
                </button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>
                     Comment
                </button>
            </div>

            <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                <img src="/w3images/avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right"
                     style="width:60px">
                <span class="w3-right w3-opacity">16 min</span>
                <h4>Jane Doe</h4><br>
                <hr class="w3-clear">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>
                     Like
                </button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>
                     Comment
                </button>
            </div>

            <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                <img src="/w3images/avatar6.png" alt="Avatar" class="w3-left w3-circle w3-margin-right"
                     style="width:60px">
                <span class="w3-right w3-opacity">32 min</span>
                <h4>Angie Jane</h4><br>
                <hr class="w3-clear">
                <p>Have you seen this?</p>
                <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>
                     Like
                </button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>
                     Comment
                </button>
            </div>

            <!-- End Middle Column -->
        </div>
        <div class="w3-col m7 middle-farms" style=" margin-top: 18px">

            <div class="w3-row-padding">
                <div class="w3-col m12">
                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <h6 class="w3-opacity">Social Media template by w3.css</h6>
                            <p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>
                            <button  type="button" class="btn btn-success mt-2"><i class="fa fa-pencil"></i>  Post</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                <img src="/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right"
                     style="width:60px">
                <span class="w3-right w3-opacity">1 min</span>
                <h4>John Doe</h4><br>
                <hr class="w3-clear">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
                <div class="w3-row-padding" style="margin:0 -16px">
                    <div class="w3-half">
                        <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights"
                             class="w3-margin-bottom">
                    </div>
                    <div class="w3-half">
                        <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
                    </div>
                </div>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>
                     Like
                </button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>
                     Comment
                </button>
            </div>

            <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                <img src="/w3images/avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right"
                     style="width:60px">
                <span class="w3-right w3-opacity">16 min</span>
                <h4>Jane Doe</h4><br>
                <hr class="w3-clear">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>
                     Like
                </button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>
                     Comment
                </button>
            </div>

            <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                <img src="/w3images/avatar6.png" alt="Avatar" class="w3-left w3-circle w3-margin-right"
                     style="width:60px">
                <span class="w3-right w3-opacity">32 min</span>
                <h4>Angie Jane</h4><br>
                <hr class="w3-clear">
                <p>Have you seen this?</p>
                <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>
                     Like
                </button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>
                     Comment
                </button>
            </div>

            <!-- End Middle Column -->
        </div>

        <!-- Right Column -->
        <div class="w3-col m2 custom" style=" background-color: #f3f5f6">
            <div class="w3-card w3-round w3-white">
                <div class="w3-container pl-2 pr-2 pb-2 mb-3">
                    <h5>Top 5 Farms</h5>
                    <div class="dis-flex mb-3">
                        <img src="/image/admin.gif" alt="Forest" style="width:20%;">
                        <div style="width: 70%" class="pl-2">
                            <p><strong>Holidaysdadkadka</strong></p>
                            <p>description</p>
                        </div>
                    </div>
                    <div class="dis-flex mb-3">
                        <img src="/image/admin.gif" alt="Forest" style="width:20%;">
                        <div style="width: 70%" class="pl-2">
                            <p><strong>Holidaysdadkadka</strong></p>
                            <p>description</p>
                        </div>
                    </div>
                    <div class="dis-flex mb-3">
                        <img src="/image/admin.gif" alt="Forest" style="width:20%;">
                        <div style="width: 70%" class="pl-2">
                            <p><strong>Holidaysdadkadka</strong></p>
                            <p>description</p>
                        </div>
                    </div>
                    <div class="dis-flex mb-3">
                        <img src="/image/admin.gif" alt="Forest" style="width:20%;">
                        <div style="width: 70%" class="pl-2">
                            <p><strong>Holidaysdadkadka</strong></p>
                            <p>description</p>
                        </div>
                    </div>
                    <div class="dis-flex mb-3">
                        <img src="/image/admin.gif" alt="Forest" style="width:20%;">
                        <div style="width: 70%" class="pl-2">
                            <p><strong>Holidaysdadkadka</strong></p>
                            <p>description</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Grid -->
        </div>

        <!-- End Page Container -->
    </div>


{{--<!-- Logo -->--}}
{{--@include('client.include.logo')--}}

{{--<!-- Subscribe -->--}}
{{--@include('client.include.subscribe')--}}

{{--<!-- Footer -->--}}
{{--@include('client.include.footer')--}}


<!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-arrow-up"></i>
		</span>
    </div>

    <script src="https://kit.fontawesome.com/c704dbde0e.js" crossorigin="anonymous"></script>
@include('client.page.farm.js')
<!--===============================================================================================-->
    <script src="/client/js/main.js"></script>
    <script>
        // Accordion
        function myFunction(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                x.previousElementSibling.className += " w3-theme-d1";
            } else {
                x.className = x.className.replace("w3-show", "");
                x.previousElementSibling.className =
                    x.previousElementSibling.className.replace(" w3-theme-d1", "");
            }
        }

        // Used to toggle the menu on smaller screens when clicking on the menu button
        function openNav() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>
</body>
</html>
