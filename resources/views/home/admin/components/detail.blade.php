@extends('home.index')
<body>

  <!-- ======= Header ======= -->

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

    <div class="row">

      <div class="col-lg-8 entries">

        <article class="entry entry-single">
          <div class="entry-img">
            <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
          </div>
          <h2 class="entry-title">
            <a href="blog-single.html">{{$detailNews->title??''}}</a>
          </h2>

          <div class="entry-meta">
            <ul>
              <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Mimin Marketing ART</a></li>
              <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$detailNews->created_at}}</time></a></li>
            </ul>
          </div>

          <div class="entry-content">
            <img src="{{ URL::to('data_file/'.$detailNews->pictures??'') }}" class="img-fluid" alt="">
            <br>
            <br>
            <br>

            <p align="justify">
              {{$detailNews->description}}
            </p>
            

          </div>

          <div class="entry-footer">
            <i class="bi bi-folder"></i>
            <ul class="cats">
              <li><a href="#">Business</a></li>
            </ul>

            <i class="bi bi-tags"></i>
            <ul class="tags">
              <li><a href="#">Creative</a></li>
              <li><a href="#">Tips</a></li>
              <li><a href="#">Marketing</a></li>
            </ul>
          </div>
        </article>

      </div><!-- End blog entries list -->

      <div class="col-lg-4">

        <div class="sidebar">

          <h3 class="sidebar-title">Search</h3>
          <div class="sidebar-item search-form">
            <form action="">
              <input type="text">
              <button type="submit"><i class="bi bi-search"></i></button>
            </form>
          </div>


          <h3 class="sidebar-title">Recent Posts</h3>
          <div class="sidebar-item recent-posts">
            @foreach($news as $data)
            <div class="post-item clearfix">
              <img src="{{ URL::to('data_file/'.$data->pictures) }}" alt="">
              <h4><a href="{{route('newsdetail',$data ->id)}}">{{$data->title}}</a></h4>
              <time datetime="2020-01-01">{{$data->created_at}}</time>
            </div>
            @endforeach

        </div><!-- End sidebar -->

      </div><!-- End blog sidebar -->

    </div>

  </div>
</section><!-- End Blog Single Section -->

</main><!-- End #main -->

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>