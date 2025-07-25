
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


<!--  Banner start -->
<section class="slider-hero hero-slider  hero-style-1  ">
  <div class="swiper-container swiper-container-horizontal">
    <div class="swiper-wrapper">
      <!-- start slide-item -->
      <div class="swiper-slide slide-item">
        <div class="slide-inner slide-bg-image main-sider-inner" data-background="images/banner/slide-1.jpg">
          <!-- <div class="overlay"></div> -->
          <div class="container">
            <div class="row">
              <div class="col-lg-7">
                <span data-swiper-parallax="300" class="text-primary font-extra font-md">Welcome to restuarant</span>
                <h1 class="mt-3 mb-5 text-lg text-white" data-swiper-parallax="400">Fresh,Delicious meal to reach your optimum health and fitness</h1>
                <a href="menu.html" class="btn btn-main mr-3" data-swiper-parallax="500">View Menu</a>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <!-- end slide-item -->
      
      <!-- start slide-item -->
      <div class="swiper-slide slide-item">
        <div class="slide-inner slide-bg-image main-sider-inner" data-background="images/banner/slide-2.jpg">
          <!-- <div class="overlay"></div> -->
          <div class="container">
            <div class="row">
              <div class="col-lg-7">
                <span data-swiper-parallax="300" class="text-primary font-extra font-md">Welcome to restuarant</span>
                <h1 class="mt-3 mb-5 text-lg text-white" data-swiper-parallax="400">Good food starts with good ingridients.Have a great time with us</h1>
                <a href="menu.html" class="btn btn-main mr-3" data-swiper-parallax="500">View Menu</a>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <!-- end slide-item -->
      
      <!-- start slide-item -->
      <div class="swiper-slide slide-item">
        <div class="slide-inner slide-bg-image main-sider-inner" data-background="images/banner/slide-3.jpg">
          <!-- <div class="overlay"></div> -->
          <div class="container">
            <div class="row">
              <div class="col-lg-7">
                <span data-swiper-parallax="300" class="text-primary font-extra font-md">Welcome to restuarant</span>
                <h1 class="mt-3 mb-5 text-lg text-white" data-swiper-parallax="400">We deliver good quality food with great service to our customers</h1>
                <a href="menu.html" class="btn btn-main mr-3" data-swiper-parallax="500">View Menu</a>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <!-- end slide-item -->
    </div>
    <!-- end swiper-wrapper -->
    <!-- swipper controls -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>
<!--  Banner End -->

<!--  Intro start -->
<section class="intro">
	<div class="container">
		<div class="intro-wrap bg-white w-100">
			<div class="row no-gutters">
				<div class="col-lg-4 col-md-4">
					<div class="intro-item" data-aos="fade-up">
						<i class="icofont-soup-bowl"></i>
						<h3 class="mt-3">Delicious Food</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati.</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-4">
					<div class="intro-item bg-gray " data-aos="fade-up" data-aos-delay="300">
						<i class="icofont-tasks"></i>
						<h3 class="mt-3">Online Order</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati. </p>
					</div>
				</div>

				<div class="col-lg-4 col-md-4">
					<div class="intro-item" data-aos="fade-up" data-aos-delay="600">
						<i class="icofont-map-pins"></i>
						<h3 class="mt-3">Free delivery</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--  Intro End -->

<!-- About start -->
<section class="section about">
	<div class="container">
		<div class="row  justify-content-center mb-5">
			<div class="col-lg-8 text-center">
				<span class="text-primary font-extra font-md">About CafeDine</span>
				<h2 class="mt-3 mb-4">We are a modern restaurant in the center of the city </h2>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-4 mb-5 mb-lg-0" data-aos="fade-up">
				<img src="images/about/img-1.jpg" alt="" class="img-fluid">
				<div class="mt-3">
					<h3>Quality Food</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.impedit maiores fugit illo deserunt!</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
				<img src="images/about/img-2.jpg" alt="" class="img-fluid">
				<div class="mt-3">
					<h3>Friendly place</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.impedit maiores fugit illo deserunt!</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="600">
				<img src="images/about/img-3.jpg" alt="" class="img-fluid">
				<div class="mt-3">
					<h3>Affordable price</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.impedit maiores fugit illo deserunt!</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- About  End -->

<!-- CTA start -->
<section class="section cta">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<span class="font-extra text-md-2 text-white-70">Prepare The Best Dishes</span>
				<h2 class="mt-3 text-white mb-4">Come & Experience Our Best of World Class Cousine</h2>

				<a href="#" class="btn btn-white">book now</a>
			</div>
		</div>
	</div>
</section>
<!-- CTA  End -->

<!-- DISHES start -->
<section class="section menu">
	<div class="container">
		<div class="row  justify-content-center mb-5">
			<div class="col-lg-8 text-center">
				<span class="text-primary font-extra font-md">CafeDine Dishes</span>
				<h2 class="mt-3 mb-4">We provide quality food.We care about your health </h2>
			</div>
		</div>

		<div class="col-12 text-center mb-5">
			<div class="btn-group btn-group-toggle" data-toggle="buttons">
				<label class="btn active">
					<input type="radio" name="shuffle-filter" value="all" checked="checked"/>All
				</label>
				<label class="btn">
					<input type="radio" name="shuffle-filter" value="design"/>Starter
				</label>
				<label class="btn">
					<input type="radio" name="shuffle-filter" value="branding"/>Launch
				</label>
				<label class="btn">
					<input type="radio" name="shuffle-filter" value="illustration"/>Dinner
				</label>
			</div>
		</div>

		<div class="row shuffle-wrapper food-gallery">
			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
				<div class="menu-item position-relative ">
					<div class="d-flex align-items-center">
						<img src="images/menu/menu-1.jpg" alt="" class="img-fluid mb-3 mb-lg-0">
						<div>
							<h4>Vitello Tonato - <span>23$</span></h4>
							<p>Chinese mustard/Chipotle aiol</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
				<div class="menu-item position-relative ">
					<div class="d-flex align-items-center">
						<img src="images/menu/menu-2.jpg" alt="" class="img-fluid mb-3 mb-lg-0">
						<div>
							<h4>Crema di Pomodoro - <span>34$</span></h4>
							<p>Chinese mustard/Chipotle aiol</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
				<div class="menu-item position-relative ">
					<div class="d-flex align-items-center">
						<img src="images/menu/menu-3.jpg" alt="" class="img-fluid mb-3 mb-lg-0">
						<div>
							<h4>Oatmeal Cookie - <span>13$</span></h4>
							<p>Chinese mustard/Chipotle aiol</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;branding&quot;]">
				<div class="menu-item position-relative ">
					<div class="d-flex  align-items-center">
						<img src="images/menu/menu-4.jpg" alt="" class="img-fluid mb-3 mb-lg-0">
						<div>
							<h4>Seasonal Soup - <span>10$</span></h4>
							<p>Chinese mustard/Chipotle aiol</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
				<div class="menu-item position-relative ">
					<div class="d-flex align-items-center">
						<img src="images/menu/menu-5.jpg" alt="" class="img-fluid mb-3 mb-lg-0">
						<div>
							<h4>Pizza Pane - <span>28$</span></h4>
							<p>Chinese mustard/Chipotle aiol</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;]">
				<div class="menu-item position-relative ">
					<div class="d-flex align-items-center">
						<img src="images/menu/menu-6.jpg" alt="" class="img-fluid mb-3 mb-lg-0">
						<div>
							<h4>Carpacio - <span>20$</span></h4>
							<p>Chinese mustard/Chipotle aiol</p>
						</div>

					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
				<div class="menu-item position-relative ">
					<div class="d-flex align-items-center">
						<img src="images/menu/menu-7.jpg" alt="" class="img-fluid mb-3 mb-lg-0">
						<div>
							<h4>Insalata Rucola - <span>15$</span></h4>
							<p>Chinese mustard/Chipotle aiol</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 mb-4 shuffle-item"
				data-groups="[&quot;design&quot;,&quot;illustration&quot;,&quot;branding&quot;]">
				<div class="menu-item position-relative ">
					<div class="d-flex align-items-center">
						<img src="images/menu/menu-8.jpg" alt="" class="img-fluid mb-3 mb-lg-0">
						<div>
							<h4>Carpacio - <span>13$</span></h4>
							<p>Chinese mustard/Chipotle aiol</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 text-center mt-5">
				<a href="menu.html" class="btn btn-black ">View full menu</a>
			</div>
		</div>
	</div>
</section>
<!-- DISHES  End -->

<!--App start -->
<section class="section download">
	<div class="container">
		<div class="row ">
			<div class="col-lg-10 col-md-12">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-6">
						<!-- <img src="images/about/2-mbl.png" alt="" class="img-fluid"> -->


						<!-- for change phone model follow this link: https://marvelapp.github.io/devices.css/ -->
						<div class="marvel-device iphone-x">
							<div class="notch">
								<div class="camera"></div>
								<div class="speaker"></div>
							</div>
							<div class="top-bar"></div>
							<div class="sleep"></div>
							<div class="bottom-bar"></div>
							<div class="volume"></div>
							<div class="overflow">
								<div class="shadow shadow--tr"></div>
								<div class="shadow shadow--tl"></div>
								<div class="shadow shadow--br"></div>
								<div class="shadow shadow--bl"></div>
							</div>
							<div class="inner-shadow"></div>
							<div class="screen">
								<img src="images/CafeDine.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6">
						<span class="text-primary font-md font-extra">Make it easy</span>
						<h2 class="mt-3">Get the CafeDine App</h2>
						<p class="mt-4">Get instant access to recipes from celebrity Cafedia and world-renowed brands right in your
							pocker. </p>

						<div class="mt-5">
							<a href="#" target="_blank" class="btn-download active mb-2">
								<i class="ti ti-android"></i>
								<div class="btn-text">
									<span>Get it on</span>
									Google Play
								</div>
							</a>
							<a href="#" target="_blank" class="btn-download">
								<i class="ti ti-apple"></i>
								<div class="btn-text">
									<span>Get it on</span>
									app store
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- App  End -->



<!-- Slider main container -->
<section class="instgram position-relative">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <h3 class="insta-title">@Instagram</h3>

      <div class="swiper-container" id="gallery-slider">
        <!-- for instagram post remove comments from bottom line and replace your user id and access token -->
        <!-- <div class="swiper-wrapper" id="instafeed" data-userId="4044026246" data-accessToken="4044026246.1677ed0.8896752506ed4402a0519d23b8f50a17"></div> -->

        <!-- this is static images. after setup instagram, remove this bottom code to the end -->
        <div class="swiper-wrapper" id="instafeed">
          <!-- Slides -->
          <div class="swiper-slide">
            <a class="popup-gallery" href="images/gallery/gallery-4.jpg">
              <img src="images/gallery/gallery-4.jpg" alt="" class="img-fluid">
            </a>
          </div>
          <div class="swiper-slide">
            <a class="popup-gallery" href="images/gallery/gallery-3.jpg">
              <img src="images/gallery/gallery-3.jpg" alt="" class="img-fluid">
            </a>
          </div>
          <div class="swiper-slide">
            <a class="popup-gallery" href="images/gallery/gallery-5.jpg">
              <img src="images/gallery/gallery-5.jpg" alt="" class="img-fluid">
            </a>
          </div>
          <div class="swiper-slide">
            <a class="popup-gallery" href="images/gallery/gallery-7.jpg">
              <img src="images/gallery/gallery-7.jpg" alt="" class="img-fluid">
            </a>
          </div>
          <div class="swiper-slide">
            <a class="popup-gallery" href="images/gallery/gallery-1.jpg">
              <img src="images/gallery/gallery-1.jpg" alt="" class="img-fluid">
            </a>
          </div>
          <div class="swiper-slide ">
            <a class="popup-gallery" href="images/gallery/gallery-2.jpg">
              <img src="images/gallery/gallery-2.jpg" alt="" class="img-fluid">
            </a>
          </div>
          <div class="swiper-slide">
            <a class="popup-gallery" href="images/gallery/gallery-3.jpg">
              <img src="images/gallery/gallery-3.jpg" alt="" class="img-fluid">
            </a>
          </div>
          <div class="swiper-slide">
            <a class="popup-gallery" href="images/gallery/gallery-4.jpg">
              <img src="images/gallery/gallery-4.jpg" alt="" class="img-fluid">
            </a>
          </div>
          <div class="swiper-slide">
            <a class="popup-gallery" href="images/gallery/gallery-5.jpg">
              <img src="images/gallery/gallery-5.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
        <!-- end -->
      </div>
    </div>
  </div>
</section>

<!--Footer start -->
<footer class="section footer">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-3 mb-5 mb-lg-0">
				<div class="widget">
					<h4 class="mb-3">About</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, nam!</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i
									class="ti-facebook mr-2"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="ti-twitter mr-2 "></i></a>
						</li>
						<li class="list-inline-item"><a href="https://github.com/themefisher/"><i class="ti-github mr-2 "></i></a>
						</li>
						<li class="list-inline-item"><a href="https://dribbble.com/themefisher/"><i
									class="ti-dribbble mr-2 "></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-4 ml-auto col-md-5 mb-5 mb-lg-0">
				<div class="widget">
					<h4 class="mb-3">Contact Info</h4>

					<ul class="list-unstyled mb-0 footer-contact">
						<li><i class="ti-mobile"></i>+1 987 654 3210</li>
						<li><i class="ti-email"></i>mail@support.com</li>
						<li><i class="ti-map"></i>1234 Altschul, New York,NY 10027-0000</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mb-5 mb-lg-0">
				<div class="widget">
					<h4 class="mb-3">Opening Hours</h4>

					<div class="info mb-4">
						<p class="mb-0">Monday - Thursday</p>
						<h5>10:00 AM - 11:00 PM</h5>
					</div>
					<div class="info">
						<p class="mb-0">Friday - Sunday</p>
						<h5>12:00 AM - 03:00 AM</h5>
					</div>
				</div>
			</div>
		</div>

		<div class="row justify-content-center mt-5">
			<div class="col-lg-6 text-center">
				<h4 class="text-white-50 mb-3">Get latest food recipe at your inbox</h4>
				<form action="#" class="footer-newsletter">
					<div class="form-group">
						<button class="button"><span class="ti-email"></span></button>
						<input type="email" class="form-control" placeholder="Enter Email">
					</div>
				</form>
			</div>
		</div>
	</div>
</footer>

<section class="footer-btm py-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="d-md-flex justify-content-between align-items-center py-3 text-center text-md-left">
					<p class="mb-0 ">Copyright &copy; 2019 a theme by <a href="https://themefisher.com/"
							class="text-white">themefisher.com</a></p>

					<div class="footer-menu mt-3 mt-lg-0">
						<ul class="list-inline mb-0">
							<li class="list-inline-item pl-2"><a href="index.html">Home</a></li>
							<li class="list-inline-item pl-2"><a href="about.html">About Us</a></li>
							<li class="list-inline-item pl-2"><a href="gallery.html">Gallery</a></li>
							<li class="list-inline-item pl-2"><a href="policy.html">Privacy Policy</a></li>
							<li class="list-inline-item pl-2"><a href="terms.html">Use of terms</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Footer  End -->

<!-- jQuery -->
<script src="{{ asset('vendor/plugins/jQuery/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('vendor/plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/aos/aos.js') }}"></script>
<script src="{{ asset('vendor/plugins/shuffle/shuffle.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/date-picker/datepicker.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/clock-picker/clockpicker.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/video-popup/jquery-modal-video.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/instafeed/instafeed.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/bootstrap-touchpin/jquery.bootstrap-touchspin.min.js') }}"></script>

 <!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script> 
<script src="{{ asset('vendor/plugins/google-map/gmap.js') }}"></script>
<!-- Main Script -->
<script src="{{ asset('vendor/js/contact.js') }}"></script>
<script src="{{ asset('vendor/js/script.js') }}"></script>


</html>