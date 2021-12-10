<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.include.head')


<!-- Custom Theme Style -->
    <link href="/admin/build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/admin/css/admin.css">
    @yield('page-css')
    <style>

    </style>

</head>

<body class="nav-md">
<button onclick="topFunction()" id="btnToTop" title="Go to top"><i class="fa fa-arrow-up"></i></button>
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/admin/dashboard" class="site_title"><img class="thumbnail-admin"
                                                                  src="/client/images/icons/favicon.png" alt=""> <span>Fresh vegetables</span></a>
                </div>

                <div class="clearfix"></div>
            <?php
            use App\Models\Admin;
            if (session()->has('loginId')) {
                $admin = Admin::find(session()->get('loginId'));
            }
            ?>

            <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{$admin->thumbnail ?? '/admin/images/admin.gif'}}" alt="..."
                             class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Xin chào,</span>
                        <h2>{{$admin->full_name ?? 'Admin'}}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->
                <br/>
                <!-- sidebar menu -->
            @include('admin.include.left-menu')
            <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
    @include('admin.include.top-navigation')
    <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col">
            <div class="">
                @yield('breadcrumb')
                <div class="clearfix"></div>
                @yield('page-content')
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
    @include('admin.include.footer')
    <!-- /footer content -->
    </div>
</div>
<div class="modal"><!-- Place at bottom of page --></div>
@include('admin.include.script')
@yield('page-script')
<!-- Custom Theme Scripts -->
<script src="/admin/build/js/custom.min.js"></script>
<script src="/admin/js/admin.js"></script>
<script>
    //======================================= Btn On Top ==================================================================

    //Get the button
    var mybutton = document.getElementById("btnToTop");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction();
    };


    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    // ======================================= Btn On Top ==================================================================
</script>
</body>
</html>
