<!DOCTYPE html>
<html lang="en">
<head>
@yield('title')
{{--    @include('client.include.css')--}}
@yield('css-page')
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/client/css/util.css">
    <link rel="stylesheet" type="text/css" href="/client/css/main.css">
    <link rel="stylesheet" type="text/css" href="/client/css/custom-client.css">
</head>
<body class="animsition">

<!-- Header -->
@include('client.include.header')


<!-- Content page -->
@yield('content-page')


{{--<!-- Logo -->--}}
{{--@include('client.include.logo')--}}

{{--<!-- Subscribe -->--}}
{{--@include('client.include.subscribe')--}}

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
<script>
    let menuUser = $('#menu-user');
    let menu = document.getElementById('menu-user');
    $('#user').on('click', function () {
        if (menuUser.css('display') === 'none') {
            menuUser.css('display', 'block')
        } else {
            menuUser.css('display', 'none')
        }
    })
    $('#cart-header-custom').on('click', function () {
        if (menuUser.css('display') === 'block') {
            menuUser.css('display', 'none')
        }
    });

    $(document).on('click', function (event) {
        if (!$(event.target).closest('#user').length) {
            menuUser.css('display', 'none')
        }
    });

</script>
</body>
</html>
