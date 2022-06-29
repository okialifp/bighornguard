@extends('home.index')
<body>

  <!-- ======= Header ======= -->
  <title>@yield('title','Carrer - BHG')</title>
  <main id="main">
@section('main')
@endsection
<main id="main">
<br>
<br>
<br>
<br>
<br>

<!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">
  <div class="carousel-item">
  <img src="..." alt="...">
  <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
</div>
  <div class="container">
    <div class="row">
      <div class="col">
        <p style="font-size:24; font-weight:700; color:black; font-family:sans-serif;">Join With Us</p>
      </div>
      <div class="col">
        <p style="font-size:20; font-weight:500; color:black; font-family:sans-serif; text-align:justify;">If you think you are passionate enough with future and technology, lets join and grow with us. We collaborate and share experience to improve each's personal and professional attribute. Once you join ART you will immediately connected to over hundreds of people in our holding groups network.</p>
      </div>
    </div>
  </div>
  <hr>
  <div class="container">
    <p style="font-size:24; font-weight:700; color:#f68c09; font-family:sans-serif;">We Are Hiring!</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <p style="font-size:20; font-weight:500; color:black; font-family:sans-serif; text-align:justify;">Crew Field</p>
        <a href="{{route('detailcarrer')}}"><p>See 2 Jobs</p></a>
      </div>
      <div class="col">
        <p style="font-size:20; font-weight:500; color:black; font-family:sans-serif; text-align:justify;">Programmer</p>
        <a href=""><p>See 2 Jobs</p></a>
      </div>
      <div class="col">    
        <p style="font-size:20; font-weight:500; color:black; font-family:sans-serif; text-align:justify;">Design Grafis</p>
        <a href=""><p>See 2 Jobs</p></a>  
      </div>
    </div>
  </div>


  </div>
</section><!-- End Blog Single Section -->

</main><!-- End #main -->

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>