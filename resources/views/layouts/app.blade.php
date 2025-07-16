<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <title> @yield('title') | {{ config('app.name', 'Tryfoods APP') }} </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Google tag (gtag.js) -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-NMECRLL5QB"></script> -->
<!-- <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NMECRLL5QB');
</script> -->
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('vendor/plugins/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/plugins/themify/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/plugins/icofont/icofont.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/plugins/fontawesome/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/plugins/aos/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/plugins/magnific-popup/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/plugins/video-popup/modal-video.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/plugins/swiper/swiper.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/plugins/date-picker/datepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/plugins/clock-picker/clockpicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/plugins/bootstrap-touchpin/jquery.bootstrap-touchspin.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/plugins/devices.min.css') }}">

  <!-- Main Stylesheet -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>
  <div class="preloader">
    <img src="images/preloader.gif" alt="preloader" class="img-fluid">
  </div>

<!-- Header Start -->

<header class="navigation ">
	<nav class="navbar navbar-expand-lg main-nav py-lg-3 position-absolute w-100" id="main-nav">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img src="images/tryfoods_logo02.png" alt="" class="img-fluid">
			</a>

			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navigation"
				aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse" id="navigation">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.html">Home</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
					<li class="nav-item"><a class="nav-link" href="menu.html">Recipes</a></li>
					<li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">Reservation</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="reservation.html">Reservation</a></li>
							<li><a class="dropdown-item" href="cart.html">Cart</a></li>
							<li><a class="dropdown-item" href="shipping.html">Shipping</a></li>
							<li><a class="dropdown-item" href="payment.html">Payment</a></li>
							<li><a class="dropdown-item" href="confirmation.html">Confirmation</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">Blog</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="blog.html">Blog </a></li>
							<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
						</ul>
					</li>

					<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>

<!-- Header Close -->
