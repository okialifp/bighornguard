@yield('ini bhg')
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route ('indexhero') }}" class="logo d-flex align-items-center">
        <img src="{{ URL::to('src/img/BHG.png') }}" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul  style="height:1px;">
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#features">SCADA</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#product">Product</a></li>
          <li><a class="nav-link scrollto" href="#certificate">Certificate</a></li>
          <li><a class="nav-link scrollto" href="#learning">Learning</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>   
          <li><a class="nav-link scrollto" href="{{route('indexcarrer')}}"><i class="fa-solid fa-briefcase"></i></a></li> 
          <li><a class="nav-link scrollto" href="{{route('login')}}"><i class="fa-solid fa-right-to-bracket"></i></a></li>
        <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->  
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>