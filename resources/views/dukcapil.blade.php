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
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{asset('public/hakana/assets/vendor/swiper/swiper-bundle.min.css')}}">
  <link href="{{asset('public/hakana/assets/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('public/portal/assets/css/berita.css')}}">
  
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="#hero">Disdukcapil</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Moto</a></li>
          @foreach($index as $h)
          <li class="dropdown"><a href="#"><span>{{$h->halaman}}</span><i class="bi bi-chevron-down"></i></a>
            <ul>
            @foreach($menu as $m)
            @if($h->id == $m->id_index)
              <li class="@if ($m->id_index !='2')dropdown @endif"><a href="{{route('pelayanan',[$m->id])}}"><span>{{$m->halaman}}</span>@if ($m->id_index !='2') <i class="bi bi-chevron-right"></i> @endif</a>
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
          <li><a class="nav-link scrollto" href="#berita">Berita</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#contact" class="book-a-table-btn scrollto">Kontak Kami</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(public/portal/assets/img/IMG-20191113-WA0127.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Selamat</span> Datang</h2>
                <p class="animate__animated animate__fadeInUp">Kini seluruh layanan disdukcapil kota
                    Balikpapan dapat dilakukan secara online</p>
                <div>
                  <a href="https://capil.balikpapan.go.id/layanan/" class="btn-menu animate__animated animate__fadeInUp scrollto" target="_blank">Layanan Online</a>
                  <a href="https://capil.balikpapan.go.id/layanan_online/pages/" class="btn-book animate__animated animate__fadeInUp scrollto" target="_blank">Antrian Online</a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" data-aos="fade-down" style='background-image: url("public/portal/assets/img/DSC00196.JPG");'>
            
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content" data-aos="fade-down">
              <h2>DisdukCapil <span><strong>Kota Balikpapan</strong></span></h2>
              <p>
               Disdukcapil Kota Balikpapan adalah lembaga Pemerintahan di bidang kependudukan dan pencatatan sipil
              </p>
              <p class="fst-italic">
                Moto Disdukcapil Kota Balikpapan :
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Sederhana</li>
                <li><i class="bx bx-check-double"></i> Mudah</li>
                <li><i class="bx bx-check-double"></i> Aman</li>
                <li><i class="bx bx-check-double"></i> Ramah</li>
                <li><i class="bx bx-check-double"></i> Transparan</li>
              </ul>
            </div>

          </div>

        </div>

      </div>
    </section>

    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">

          <div class="col-lg-4 mb-4">
            <div class="box" data-aos="fade-down">
              <span>01</span>
              <h5>Kependudukan</h5>
              <p>Pelayanan Kartu Keluarga, KTP-elektronik dan Surat Pindah.</p>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mt-lg-0">
            <div class="box" data-aos="fade-down">
              <span>02</span>
              <h5>Pencatatan Sipil</h5>
              <p>Pencatatan Kelahiran, Pencatatan Kematian, Pencatatan Perkawinan dan Pencatatan Perceraian.</p>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mt-lg-0">
            <div class="box" data-aos="fade-down">
              <span>03</span>
              <h5>Data</h5>
              <p>Data Penduduk, Data Keluarga, Data Wajib KTP, dll.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Whu Us Section -->
    
  <section class="about">
    <div class="container" data-aos="fade-down">

      <div class="section-title">
        <h2>Informasi Pelayanan <span>Dukcapil Balikpapan</span></h2>
      </div>

      <div class="events-slider swiper">
        <div class="swiper-wrapper">
       <div class="row" data-aos="fade-down">
        <div class="content-wrapper" data-aos="fade-down">
          @foreach ($menu3 as $b)
            <div class="news-card" data-aos="fade-down">
                <a href="{{route('pelayanan',[$b->id])}}" class="news-card__card-link">
                </a>
                <img src="{{asset('storage/app/public/'.$b->foto)}}" alt="" class="news-card__image">
                    <div class="news-card__text-wrapper">
                        <h5 class="news-card__title">{{$b->halaman}}</h5>
                        <div class="news-card__details-wrapper">
                            <p class="news-card__excerpt">{!!Str::limit($b->isi, 150)!!}&hellip;</p>
                            <a href="{{route('pelayanan',[$b->id])}}" class="news-card__read-more">Detail&hellip;</a>
                        </div>
                    </div>
                  </div>
            @endforeach 
        </div>
    </div>
  </section>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-down">
          <h2><span>Kontak</span> Kami</h2>
        </div>
      </div>
      <div class="container mt-3">
        <div class="section-title" data-aos="fade-down">
          <h3>Konsultasi via Whatsapp hanya dilakukan pada hari dan jam kerja.</h3>
        </div>

        <div class="row mt-3">

          <div class="col-lg-4 col-md-6 mb-3">
            <div class="info-wrap" data-aos="fade-down">
              <div class="pic"><img src="" class="img-fluid" width="240px"></div>
              <div class="member-info">
                <h5>Hotline Kependudukan</h5>
                
                <div class="social">
                    <span><a href="https://api.whatsapp.com/send?phone=628164561010"><i class="bi bi-phone">0816-4560909</i></a></span>
                </div>
                <div class="social">
                  <a href="https://www.facebook.com/Disdukcapilbpn"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/disdukcapilbpn/?hl=en"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-3">
            <div class="info-wrap" data-aos="fade-down">
              <div class="pic"><img src="" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h5>Hotline Pencatatan Sipil</h5>
                <div class="social">
                    <span><a href="https://api.whatsapp.com/send?phone=628164561111"><i class="bi bi-phone">08164561111</i></a></span>
                </div>
                <div class="social">
                  <a href="https://www.facebook.com/Disdukcapilbpn"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/disdukcapilbpn/?hl=en"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-3">
            <div class="info-wrap" data-aos="fade-down">
              <div class="pic"><img src="" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h5>Hotline KTP E-Elektronik</h5>
                <div class="social">
                    <a href="https://api.whatsapp.com/send?phone=628164560808"><i class="bi bi-phone">08164560808</i></a>
                </div>
                <div class="social">
                  <a href="https://www.facebook.com/Disdukcapilbpn"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/disdukcapilbpn/?hl=en"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
      <div class="container mt-5">

        <div class="info-wrap" data-aos="fade-down">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Alamat:</h4>
              <p>Jalan MT Haryono No.187 Damai Balikpapan Kota RT.26, Damai, Balikpapan Kota, Kota Balikpapan, Kalimantan Timur 76114</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Jam Pelayanan:</h4>
              <p>Senin-Kamis:<br>08:00 AM - 14:00 AM</p>
              <p>Jumat:<br>08:00 AM - 11:00 AM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>capil.balikpapan@gmail.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Wa:</h4>
              <p>+62 816-4560-909<br>+62 816-4561-111</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->
    <section id="berita" class="berita">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Berita<span> Terbaru</span></h2>
        </div>

        <div class="row mb-0 mt-3 px-3" data-aos="fade-down">
                <div class="content-wrapper" data-aos="fade-down">
                    @foreach ($berita as $b)
                    <div class="news-card " data-aos="fade-down">
                        <a href="{{route('beritaindex.show',[$b->id])}}" class="news-card__card-link"></a>
                        <img src="{{asset('storage/app/public/'.$b->foto)}}" alt="" class="news-card__image">
                            <div class="news-card__text-wrapper">
                                <h5 class="news-card__title">{{$b->judul}}</h5>
                                <div class="news-card__post-date">{{$b->created_at}}</div>
                                <div class="news-card__details-wrapper">
                                    <p class="news-card__excerpt">{!!Str::limit($b->isi, 150)!!}&hellip;</p>
                                    <a href="{{route('beritaindex.show',[$b->id])}}" class="news-card__read-more">Read more</a>
                                </div>
                            </div>
                    </div>
                    @endforeach 
                </div>
            <center>
            <a href="{{route('beritaindex.index')}}" class="book-a-table-btn scrollto">Index Berita</a>
            </center>
        </div>

      </div>
    </section><!-- End Gallery Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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
  <!--=============== sweper ===============-->
  <script src="{{asset('public/hakana/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!--=============== SCROLL REVEAL===============-->
  <script src="{{asset('public/hakana/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset("public/hakana/assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
  <script src="{{asset('public/hakana/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('public/hakana/assets/vendor/php-email-form/validate.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('public/hakana/assets/js/main.js')}}"></script>

</body>

</html>