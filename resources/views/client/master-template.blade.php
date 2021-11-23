<!DOCTYPE html>
<html lang="en">
<head>
   @yield('title')
{{--    @include('client.include.css')--}}
    @yield('css-page')
   <!--===============================================================================================-->
       <link rel="stylesheet" type="text/css" href="/client/css/util.css">
       <link rel="stylesheet" type="text/css" href="/client/css/main.css">
</head>
<body class="animsition">

<!-- Header -->
@include('client.include.header')


<!-- Content page -->
@yield('content-page')


<!-- Logo -->
@include('client.include.logo')

<!-- Subscribe -->
@include('client.include.subscribe')

<!-- Footer -->
@include('client.include.footer')


<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-arrow-up"></i>
		</span>
</div>
{{--@include('client.include.js')--}}
<script src="https://kit.fontawesome.com/c704dbde0e.js" crossorigin="anonymous"></script>
@yield('js-page')
<!--===============================================================================================-->
<script src="/client/js/main.js"></script>
</body>
</html>
