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
<!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog">
  <div class="row features-icons">
    <div class="row">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators" style="magrin-right:1000px;">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ URL::to('src/img/carrer/carrer1.png') }}" style="height:600px;" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" style="margin-bottom:250px;">
        <h5 style="font-style:sans-serif; font-color:white; font-size:50px; font-weight:700;">WELCOME</h5>
        <br>
        <p style="font-style:sans-serif; color:white; font-size:70px; font-weight:700;">E-RECRUITMENT</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ URL::to('src/img/carrer/carrer2.png') }} "  style="height:600px;" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block"  style="margin-bottom:250px;">
      <h5 style="font-style:sans-serif; font-color:white; font-size:50px; font-weight:700;">WELCOME</h5>
      <br>
        <p style="font-style:sans-serif; color:white; font-size:70px; font-weight:700;">E-RECRUITMENT</p></div>
    </div>
    <div class="carousel-item">
      <img src="{{ URL::to('src/img/carrer/carrer3.png') }}" class="d-block w-100" alt="..." style="height:600px;">
       <div class="carousel-caption d-none d-md-block" style="margin-bottom:250px;">
       <h5 style="font-style:sans-serif; font-color:white; font-size:50px; font-weight:700;">WELCOME</h5>
      <br>
        <p style="font-style:sans-serif; color:white; font-size:70px; font-weight:700;">E-RECRUITMENT</p></div>
    </div>
    </div>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
  </div>
  </div>
</div>
<br>
<br>
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
  
  <div class="container">
    <p style="font-size:24; font-weight:700; color:#f68c09; font-family:sans-serif;">We Are Hiring!</p>
  </div>
  <hr>
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