<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.include.head')


<!-- Custom Theme Style -->
    <link href="/admin/build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/admin/css/admin.css">
    @yield('page-css')

</head>

<body class="nav-md">
<button onclick="topFunction()" id="btnToTop" title="Go to top"><i class="fa fa-arrow-up"></i></button>
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/admin" class="site_title"><img class="thumbnail-admin" src="/client/images/icons/favicon.png" alt=""> <span>Fresh vegetables</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="/admin/images/admin.gif" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>Admin</h2>
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
{{--    @include('admin.include.top-navigation')--}}
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
@include('admin.include.script')
@yield('page-script')
<!-- Custom Theme Scripts -->
<script src="/admin/build/js/custom.min.js"></script>
<script src="/admin/js/admin.js"></script>
</body>
</html>
