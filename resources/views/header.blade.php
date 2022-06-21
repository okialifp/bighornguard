@yield('ini bhg')
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route ('indexhero') }}" class="logo d-flex align-items-center">
        <img src="{{ URL::to('src/img/BHG.png') }}" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#product">Product</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#features">SCADA</a></li>
          <li><a class="nav-link scrollto" href="#learning">Learning</a></li>
          <li><a class="nav-link scrollto" href="#certificate">Certificate</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>   
          <li><a class="nav-link scrollto" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i></a></li> 
          <li><a class="nav-link scrollto" href="{{route('login')}}"><i class="fa fa-search-plus" aria-hidden="true" style="width:100px"></i></a></li>
        <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->  
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>