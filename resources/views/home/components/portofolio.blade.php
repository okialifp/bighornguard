<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <p>Portfolio</p>
    <br>
    <h2>Check our latest work</h2>
  </header>

  <div class="row" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-12 d-flex justify-content-center">
      <ul id="portfolio-flters">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">Early Production Facility</li>
        <li data-filter=".filter-card">Welltesting</li>
      </ul>
    </div>
  </div>

  <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{ URL::to('src/img/portfolio/Salawati1.jpeg') }}" class="img-fluid" alt="" style="height: 290px;">
        <div class="portfolio-info">
          <h4>EPF Salawati</h4>
          <p>PT Genggam Asa Sekawan</p>
          <div class="portfolio-links">
            <a href="{{ URL::to('src/img/portfolio/Salawati1.jpeg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="EPF SALAWATI"><i class="bi bi-zoom-in"></i></a>
            <a href="{{ route('show_portfolio') }}" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{ URL::to('src/img/portfolio/tately1.jpeg') }}" class="img-fluid" alt="" style="height: 290px;">
        <div class="portfolio-info">
          <h4>EPF TATELY</h4>
          <p>TATELY NV</p>
          <div class="portfolio-links">
            <a href="{{ URL::to('src/img/portfolio/tately1.jpeg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="EPF TATELY"><i class="bi bi-zoom-in"></i></a>
            <a href="portofolio-tately.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{ URL::to('src/img/portfolio/jas2.png') }}" class="img-fluid" alt="" style="height: 290px;">
        <div class="portfolio-info">
          <h4>EPF JATIASRI</h4>
          <p>PT PUTRA SEJATI INDOMAKMUR</p>
          <div class="portfolio-links">
            <a href="{{ URL::to('src/img/portfolio/jas2.png') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="EPF JAS"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-jas.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{ URL::to('src/img/portfolio/pasir1.jpeg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>EPF PASIR</h4>
          <p>PASIR PETROLEUM RESOURCES LTD</p>
          <div class="portfolio-links">
            <a href="{{ URL::to('src/img/portfolio/pasir1.jpeg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="PASIR PETROLEUM RESOURCES LTD"><i class="bi bi-plus"></i></a>
            <a href="portfolio-pprl.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{ URL::to('src/img/portfolio/abg1.jpeg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>EPF AKASIA BAGUS</h4>
          <p>PT PUTRA SEJATI INDOMAKMUR</p>
          <div class="portfolio-links">
            <a href="{{ URL::to('src/img/portfolio/abg1.jpeg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="EPF ABG"><i class="bi bi-plus"></i></a>
            <a href="portfolio-abg.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="{{ URL::to('src/img/portfolio/JAS27.jpeg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>TESTING UNIT JAS#27</h4>
          <p>PT PUTRA SEJATI INDOMAKMUR</p>
          <div class="portfolio-links">
            <a href="{{ URL::to('src/img/portfolio/JAS27.jpeg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</section><!-- End Portfolio Section -->