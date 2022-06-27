@extends('skeleton')
@section('main')
@include('home.components.hero')
@include('home.components.experties')
@include('home.components.features2')
@include('home.components.services')
@include('home.components.features')
@include('home.components.boost')
@include('home.components.contacts')
@include('home.components.values')

@endsection     


  <!-- Vendor JS Files -->
  <script src="{{ URL::to('src/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ URL::to('src/vendor/aos/aos.js') }}"></script>
  <script src="{{ URL::to('src/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::to('src/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ URL::to('src/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ URL::to('src/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ URL::to('src/vendor/php-email-form/validate.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="{{ URL::to('src/js/main.js') }}"></script>

</body>

</html>