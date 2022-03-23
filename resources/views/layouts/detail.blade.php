<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dukcapil Balikpapan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('public/portal/assets/img/favicon.ico')}}" rel="icon">
  <link href="{{asset('public/hakana/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('public/hakana/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/hakana/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/hakana/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('public/hakana/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/hakana/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/hakana/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.8/css/all.css'>
  <!-- Template Main CSS File -->
  <link href="{{asset('public/hakana/assets/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('public/portal/assets/css/berita.css')}}">
  <link rel="stylesheet" href="{{asset('public/portal/assets/css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('public/portal/assets/css/swiper-bundle.min.css')}}">
  <!-- =======================================================
  * Template Name: Delicious - v4.7.1
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="{{route('dukcapil')}}">Disdukcapil</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('dukcapil')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('dukcapil')}}#about">Moto</a></li>
          @foreach($index as $h)
          <li class="dropdown"><a href="#"><span>{{$h->halaman}}</span><i class="bi bi-chevron-down"></i></a>
            <ul>
            @foreach($menu as $m)
            @if($h->id == $m->id_index)
              <li class="@if ($m->id_index !='2')dropdown @endif"><a href="{{route('pelayanan',[$m->id])}}"><span>{{$m->halaman}}</span> @if ($m->id_index !='2') <i class="bi bi-chevron-right"></i> @endif</a>
                <ul>
                  @foreach($menu2 as $m2)
                  @if($m->id == $m2->id_menu)
                  <li><a href="{{route('pelayanan',[$m2->id])}}">{{$m2->halaman}}</a></li>
                  @endif
                  @endforeach
                </ul>
              </li>
              @endif
              @endforeach
            </ul>
          </li>
          @endforeach
          <li><a class="nav-link scrollto" href="#">Inovasi</a></li>
          <li><a class="nav-link scrollto" href="{{route('dukcapil')}}#berita">Berita</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="{{route('dukcapil')}}#contact" class="book-a-table-btn scrollto">Kontak Kami</a>

    </div>
  </header><!-- End Header -->
   @yield('hero')
  <main id="main">
            <!--==================== HOME ====================-->
            @yield('content')
        </main>
        <footer id="footer">
          <div class="container">
            <h5>Dukcapil Balikpapan</h5>
            <div class="social-links">
              <a href="https://api.whatsapp.com/send?phone=628164561111"><i class="bx bxl-whatsapp"></i></a>
              <a href="https://www.facebook.com/Disdukcapilbpn" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/disdukcapilbpn/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>
      
            </div>
            <div class="copyright">
              &copy; Copyright <strong><span>Dukcapil</span></strong>. All Rights Reserved
            </div>
          </div>
        </footer><!-- End Footer -->
        
          <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        
          <!-- Vendor JS Files -->
          <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                <script>
                    AOS.init();
                </script>
        
                <!--=============== SCROLL REVEAL===============-->
          <script src="{{asset('public/hakana/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
          <script src="{{asset("public/hakana/assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
          <script src="{{asset('public/hakana/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
          <script src="{{asset('public/hakana/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
          <script src="{{asset('public/hakana/assets/vendor/php-email-form/validate.js')}}"></script>
          <script src="https://kit.fontawesome.com/83fe09b92c.js" crossorigin="anonymous"></script>
          <!-- Template Main JS File -->
          <script src="{{asset('public/hakana/assets/js/main.js')}}"></script>
        
        </body>
        
        </html>