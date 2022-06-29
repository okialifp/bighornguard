<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title','Bighorn Guard')</title>
  <link rel = "icon" href = 
"{{ URL::to('src/img/bhg_logo.svg') }}" 
        type = "image/x-icon">
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::to('src/img/bhg_logo.svg') }}" rel="icon">
  <link href="{{ URL::to('src/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::to('src/vendor/aos/aos.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="{{ URL::to('src/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::to('src/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ URL::to('src/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ URL::to('src/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ URL::to('src/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::to('src/font/fonts/FontAwesome.otf') }}">
  <link rel="stylesheet" href="{{ URL::to('src/fontawesome/css/all.css') }}">
  <link rel="stylesheet" href="{{ URL::to('src/fontawesome/css/all.min.css') }}"> 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="{{URL::to('src/news/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{URL::to('src/news/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{URL::to('src/news/css/ticker-style.css')}}">
  <link rel="stylesheet" href="{{URL::to('src/news/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{URL::to('src/news/css/slicknav.css')}}">
  <link rel="stylesheet" href="{{URL::to('src/news/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{URL::to('src/news/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{URL::to('src/news/css/fontawesome-all.min.css')}}">
  <link rel="stylesheet" href="{{URL::to('src/news/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{URL::to('src/news/css/slick.css')}}">
  <link rel="stylesheet" href="{{URL::to('src/news/css/nice-select.css')}}">
  <link rel="stylesheet" href="{{URL::to('src/news/css/style.css')}}">
  <link rel="stylesheet" href="{{URL::to('src/news/css/slider.css')}}">
  <link rel="stylesheet" href="{{URL::to('src/bs4/css/bootstrap.min.css')}}">x

  <!-- Template Main CSS File -->
  <link href="{{ URL::to('src/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  @include('header')

  <main id="main">
  
      @yield('main')
      
  </main>
@include('footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  

  <!-- Vendor JS Files -->
  
  
  <script src="{{ URL::to('src/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ URL::to('src/vendor/aos/aos.js') }}"></script>
  <script src="{{ URL::to('src/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::to('src/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ URL::to('src/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ URL::to('src/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ URL::to('src/vendor/php-email-form/validate.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
  <!-- Template Main JS File -->
  <script src="{{URL::to('src/news/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{URL::to('src/news/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{URL::to('src/news/js/popper.min.js')}}"></script>
        <script src="{{URL::to('src/news/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{URL::to('src/news/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{URL::to('src/news/js/owl.carousel.min.js')}}"></script>
        <script src="{{URL::to('src/news/js/slick.min.js')}}"></script>
        <!-- Date Picker -->
        <script src="{{URL::to('src/news/js/gijgo.min.js')}}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{URL::to('src/news/js/wow.min.js')}}"></script>
		<script src="{{URL::to('src/news/js/animated.headline.js')}}"></script>
        <script src="{{URL::to('src/news/js/jquery.magnific-popup.js')}}"></script>

        <!-- Breaking New Pluging -->
        <script src="{{URL::to('src/news/js/jquery.ticker.js')}}"></script>
        <script src="{{URL::to('src/news/js/site.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{URL::to('src/news/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{URL::to('src/news/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{URL::to('src/news/js/jquery.sticky.js')}}"></script>
        
        <!-- contact js -->
        <script src="{{URL::to('src/news/js/contact.js')}}"></script>
        <script src="{{URL::to('src/news/js/jquery.form.js')}}"></script>
        <script src="{{URL::to('src/news/js/jquery.validate.min.js')}}"></script>
        <script src="{{URL::to('src/news/js/mail-script.js')}}"></script>
        <script src="{{URL::to('src/news/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{URL::to('src/bs4/js/bootstrap.min.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{URL::to('src/news/js/plugins.js')}}"></script>
        <script src="{{URL::to('src/news/js/main.js')}}"></script>
  <script src="{{ URL::to('src/js/main.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>