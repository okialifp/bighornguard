<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
  

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
      <h2 data-aos="fade-up">The best possible services and quality of </h3>
      <h3 data-aos="fade-up" data-aos-delay="400">Automation and Monitoring System SCADA | DCS | IoT | DAQ</h2>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Get Started</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>

<div class="col-lg-6 hero-img" style="height:500px;">
  <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                          @foreach ($news as $data)
                            <a href="{{route('newspageindex')}}"><strong><span>News</span></strong></a>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    <li class="news-item">{{$data->title}}</li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="trending-top mb-30 carousel-inner">
                        @foreach($news as $key => $row)
                        <div class="trend-top-img carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ url('/data_file/'.$row->pictures) }}" alt="" style="height:300px; width:800px;">
                          <div class="trend-top-cap">
                            <h2><a href="details.html">{{$row->title}}</a></h2>
                          </div>
                        </div>
                        @endforeach
                    </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
  </div>
</div>

</section>
