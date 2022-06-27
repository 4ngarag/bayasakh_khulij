<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<title>@yield('title') - @lang('nav_KhulijCompany')</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="{{ asset('src/img/favicon.ico') }}"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/bootstrap.min.css') }}">
	<!-- Font-Awesome -->
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('src/css/fontawesome-all.css') }}"> --}}
	<link href="{{ asset('src/assets/fontawesome/css/all.css') }}" rel="stylesheet">
	<!-- Slider -->
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/swiper.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/slider.css') }}">
	<!--Navigation Menu CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/navigation.css') }}">
	<!-- Owl carousel Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/owl.theme.default.css') }}">
	<!--Animate CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/animate.css') }}">
	<!-- Main Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/default.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/styles.css') }}">
    @yield('styles')
</head>

<body>
<!-- Preloader Start-->
{{-- <div id="preloader">
	<div class="row loader">
		<div class="loader-icon"></div>
	</div>
</div> --}}
<!-- Preloader End -->

@include('partials.header')

<!-- Main START -->
<main>
	@yield('content')
	
    @include('partials.footer')
</main>
<!-- Main END -->

<!-- Jquery -->
<script src="{{ asset('src/js/jquery-3.4.1.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('src/js/bootstrap.min.js') }}"></script>
<!-- Navbar JS -->
<script src="{{ asset('src/js/navigation.js') }}"></script>
<script src="{{ asset('src/js/navigation.fixed.js') }}"></script>
<!-- Swiper Slider -->
{{-- <script src="{{ asset('src/js/swiper.min.js') }}"></script> --}}
<!-- Popper -->
<script src="{{ asset('src/js/popper.min.js') }}"></script>
<!-- Include js plugin -->
<script src="{{ asset('src/js/owl.carousel.min.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('src/js/main.js') }}"></script>
@yield('scripts')
</body>

</html>
