<!doctype html>
<html class="fixed">
    @include('admin.layout.include.header')
    <body>
        <section class="body">
            <!-- Navbar -->
            @include('admin.layout.include.nav-bar')
            <!-- /.navbar -->
            <div class="inner-wrapper">
                <!-- start: sidebar -->
                @include('admin.layout.include.left-menu')
                <!-- end: sidebar -->
                <section role="main" class="content-body">
                    @yield('breadcrumb')
                    <!-- start: page -->
                    @yield('content')
                    <!-- end: page -->
                </section>
            </div>
        </section>

    <!-- start: script -->
    @include('admin.layout.include.script')
    @yield('script')
    <!-- start: script -->
    </body>
</html>

