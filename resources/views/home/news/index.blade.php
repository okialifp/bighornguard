@extends('home.index')
<body>

  <!-- ======= Header ======= -->
  @section('title','Bighorn Guard - News')
  <main id="main">
@section('main')
@endsection

<section class="breadcrumbs" style="background-color:#FFFF;">
</section><!-- End Breadcrumbs -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">
            @foreach($news as $data)
              <div class="entry-img">
                <img src="{{ URL::to('data_file/'.$data->pictures) }}" alt="" class="img-fluid">
              </div>
              <br>  
              <h2 class="entry-title">
                <a href="{{ route('news_detail') }}">{{$data->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Admin Marketing</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$data->created_at}}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                
                <p maxlength="50">
                {{Str::limit($data->description, 200,  "(...)")}}
                
                </p>
                <div class="read-more">
                  <a href="{{route('newsdetail',$data->id)}}">Read More</a>
                </div>
              </div>
              <br>
              @endforeach
              
            </article><!-- End blog entry -->

           
            

            <div class="blog-pagination">
              <ul class="justify-content-center">
              {{$news->links()}}
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
              @foreach($news as $data)
                <div class="post-item clearfix">
                  <img src="{{ URL::to('data_file/'.$data->pictures) }}" alt="">
                  <h4><a href="{{route('newsdetail',$data ->id)}}">{{$data->title??''}}</a></h4>
                  <time datetime="2020-01-01">{{$data->created_at}}</time>
                </div>
              @endforeach
              </div><!-- End sidebar recent posts-->

              

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>