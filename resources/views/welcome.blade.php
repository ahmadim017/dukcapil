<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="{{asset('public/portal/assets/img/favicon.ico')}}" />

        <!-- bootstrap cdn -->
	    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
        <!-- font awesome cdn -->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <!-- jquery cdn -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.8/css/all.css'>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700'><link rel="stylesheet" href="./style.css">
       
        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="{{asset('public/portal/assets/css/swiper-bundle.min.css')}}">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{asset('public/portal/assets/css/styles.css')}}">
        <link rel="stylesheet" href="{{asset('public/portal/assets/css/dropdown.css')}}">
        <link rel="stylesheet" href="{{asset('public/portal/assets/css/style.css')}}">
        <style>
            #carouselExampleIndicators .carousel-inner .carousel-item{
                background-image: url("public/portal/assets/img/IMG-20191113-WA0127.jpg");
            }
        </style>

        <title>DisdukCapil Balikpapan</title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#home" class="nav__logo"><h3>Dukcapil</h3></a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <div class="dropdown">
                            <a href="" class="nav__link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pelayanan</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach($menu as $m)
                              <a class="dropdown-item" href="{{route('pelayanan',[$m->id])}}">{{$m->halaman}}</a>
                              @endforeach
                            </div>
                            </div>
                        </li>
                        <li class="nav__item">
                            <div class="dropdown">
                            <a href="" class="nav__link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang Kami</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach($menu2 as $m)
                              <a class="dropdown-item" href="#">{{$m->halaman}}</a>
                              @endforeach
                            </div>
                            </div>
                        </li>
                        <li class="nav__item">
                            <div class="dropdown">
                            <a href="" class="nav__link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Program Kerja</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#"></a>
                            </div>
                            </div>
                        </li>
                        <li class="nav__item">
                            <div class="dropdown">
                            <a href="" class="nav__link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PPID</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#"></a>
                            </div>
                            </div>
                        </li>
                        <li class="nav__item">
                            @foreach ($menu3 as $m)
                            <a href="{{route('pelayanan',[$m->id])}}" class="nav__link">{{$m->halaman}}</a>
                            @endforeach
                        </li>
                        <li class="nav__item">
                            <a href="#berita" class="nav__link">Berita</a>
                        </li>
                    </ul>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="info">
                            <h1 data-aos="fade-down">Selamat Datang</h1>
                                <p data-aos="fade-down">Di Dukcapil Balikpapan Selalu Terupdate & Selalu Direspon</p>
                            </div>
                      </div>
              </div>
            </section>
            <!--==================== ABOUT ====================-->
            <section class="about section" id="discover">
                <div class="about__container container grid" data-aos="fade-down">
                    <div class="about__data">
                        <h2 class="section__title about__title">Pelayanan online <br> Disdukcapil Balikpapan</h2>
                        <p class="about__description">Kini seluruh layanan disdukcapil kota
                            Balikpapan dapat dilakukan secara online
                        </p>
                        <a href="https://capil.balikpapan.go.id/layanan/" class="button mb-2" target="_blank">Layanan Online</a>
                        <a href="https://capil.balikpapan.go.id/layanan_online/pages/" class="button" target="_blank">Antrian Online</a>
                    </div>

                    <div class="about__img ">
                        <div class="about__img-overlay">
                            <img src="{{asset('public/portal/assets/img/aplikasi (2).png')}}" alt="" class="about__img-one">
                        </div>
                    </div>
                </div>
            </section>
            <!--==================== DISCOVER ====================-->
            <section class="discover section" id="discover2">
                <h2 class="section__title" data-aos="fade-down">Informasi Pelayanan <br>Dukcapil Balikpapan</h2>
                <div class="discover__container container swiper-container" data-aos="fade-down">
                    <div class="swiper-wrapper">
                        <!--==================== DISCOVER 1 ====================-->
                        @foreach ($menu as $p)
                        <div class="discover__card swiper-slide shadow h-100">
                            <img src="{{asset('storage/app/public/'.$p->foto)}}" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">{{$p->halaman}}</h2>
                                <span class="discover__description">{{$p->halaman}}</span>
                                <a href="{{route('pelayanan',[$p->id])}}" class="button-light">Selengkapnya<i class='bx bx-right-arrow-alt button-icon'></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!--==================== REPORT ====================-->
            <div class="container">
                <div class="row mb-5 mt-5" data-aos="fade-down">
                <center>
                    <div class="col-xl-10 col-md-12">
                        <a href="http://web.balikpapan.go.id/whistleblower/" target="_blank">
                            <div class="btn btn-warning shadow h-100" >
                            <div class="card-block text-center">
                                <div style="padding:15px;">
                                    <h4 class="m-t-15">
                                    <i class="bi bi-check-square-fill"></i>
                                        WHISTLEBLOWER
                                    </h4>
                                </div>
                            </div>
                            </div>
                        </a>
                    </div>
                    <br>
                    <div class="col-xl-6 col-md-12">
                        <a href="https://www.lapor.go.id/" target="_blank">
                            <div class="btn btn-danger shadow h-100">
                            <div class="card-block text-center">
                                <div style="padding:15px;">
                                    <h4 class="m-t-15">
                                    <i class="bi bi-chat-square-text-fill"></i>
                                        LAPOR!
                                    </h4>
                                </div>
                            </div>
                            </div>
                        </a>
                    </div>
                </center>
                </div>
            </div>

            <!--==================== ABOUT 2 ====================-->
            <div class="row mb-3 mt-3 px-3" id="about" data-aos="fade-down">
                <div class="about__container grid">
                    <img src="{{asset('public/portal/assets/img/DSC00196.JPG')}}" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            DisdukCapil Kota Balikpapan
                        </h2>
                        <p class="about__description">
                            Disdukcapil Kota Balikpapan adalah lembaga pemerintahan di bidang kependudukan 
                            dan pencatatan sipil. Motto Disdukcapil kota Balikpapan :
                        </p>

                        <div class="about__details">
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                               Sederhana
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Mudah
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Aman
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Ramah
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Transparan
                            </p>
                        </div>
                        <a href="about/" class="button" data-aos="fade-down">Tentang Kami</a>
                        </a>
                    </div>
                </div>
            </div>
            <!--==================== Hotline ====================-->
            <div class="row mb-3 mt-3 px-3" data-aos="fade-down">
                    <div class="card__container bd-container">
                            <div class="card__glass shadow h-100">
                                <img src="{{asset('public/portal/assets/img/customer-service (2).png')}}" alt="" class="card__img">
                
                                <div class="card__data">
                                    <h3 class="card__title">Hotline Kependudukan</h3>
                                    <span class="card__profession">Konsultasi via Whatsapp hanya dilakukan pada hari dan jam kerja</span>
                                </div>
            
                                <a href="https://api.whatsapp.com/send?phone=628164561010" class="card__button">0816-4560909</a>
                                
                                <div class="card__social">
                                    <a href="#" class="card__link"><i class='bx bxl-instagram' ></i></a>
                                    <a href="#" class="card__link"><i class='bx bxl-facebook'></i></a>
                                    <a href="#" class="card__link"><i class='bx bxl-whatsapp' ></i></a>
                                </div>
                            </div>
                        <div class="card__glass shadow h-100">
                            <img src="{{asset('public/portal/assets/img/customer-service (2).png')}}" alt="" class="card__img">
            
                            <div class="card__data">
                                <h3 class="card__title">Hotline Pencatatan Sipil</h3>
                                <span class="card__profession">Konsultasi via Whatsapp hanya dilakukan pada hari dan jam kerja</span>
                            </div>
        
                            <a href="https://api.whatsapp.com/send?phone=628164561111" class="card__button">08164561111</a>
            
                            <div class="card__social">
                                <a href="#" class="card__link"><i class='bx bxl-instagram' ></i></a>
                                <a href="#" class="card__link"><i class='bx bxl-facebook'></i></a>
                                <a href="#" class="card__link"><i class='bx bxl-whatsapp' ></i></a>
                            </div>
                        </div>
            
                        <div class="card__glass shadow h-100">
                            <img src="{{asset('public/portal/assets/img/customer-service (2).png')}}" alt="" class="card__img">
            
                            <div class="card__data">
                                <h3 class="card__title">Hotline KTP E-Elektronik</h3>
                                <span class="card__profession">Konsultasi via Whatsapp hanya dilakukan pada hari dan jam kerja</span>
                            </div>
        
                            <a href="https://api.whatsapp.com/send?phone=628164560808" class="card__button">08164560808</a>
            
                            <div class="card__social">
                                <a href="#" class="card__link"><i class='bx bxl-instagram' ></i></a>
                                <a href="#" class="card__link"><i class='bx bxl-facebook'></i></a>
                                <a href="#" class="card__link"><i class='bx bxl-whatsapp' ></i></a>
                            </div>
                        </div>
                    </div>
            </div>
        <!--==================== QUESTIONS ====================-->
        <div class="row mb-3 mt-3 px-2">
            <div class="head" id="place" data-aos="fade-down">
                <h1>Frequently Asked Questions</h1>
            </div>
                <div class="faq_body" data-aos="fade-down" >
                    <details>
                        <summary>Apa Saja Persyaratan KTP</summary>
                        <div>
                            <p> <b> Persyaratan: </b> </p>
                            <p>KTP Elektronik Baru</p>
                            <p class="about__description">
                                1. Fotocopy Kartu Keluarga
                            </p>
                            <p> <b> Persyaratan: </b> </p>
                            <p>Pergantian KTP Elektronik, karena Hilang atau Rusak</p>
                            <p class="about__description">
                                1. Fotocopy Kartu Keluarga, <br>
                                2. Surat Keterangan hilang dari Kepolisian (untuk KTP-el yang hilang), <br>
                                3. foto KTP-el yang rusak <br>
                            </p>
                            <p> <b> Persyaratan: </b> </p>
                            <p>Pergantian KTP Elektronik karena Perubahan Data</p>
                            <p class="about__description">
                                1. Kartu Keluarga terbaru <br>
                                2. KTP lama
                            </p>
                        </div>
                    </details>
                    <details>
                        <summary>Bagaimana Cara Pindah KK</summary>
                        <div>
                            <p> <b> Persyaratan: </b> </p>
                            <p>Numpang Kartu Keluarga / Pindah Kartu Keluarga</p>
                            <p class="about__description">
                                1. Kartu Keluarga Saat ini <br>
                                2. Kartu Keluarga Tujuan <br>
                                3. Surat Pernyataan anak ikut family lain <br>
                                4. Mengisi formulir pada https://capil.balikpapan.go.id/layanan/ <br>
                            </p>
                        </div>
                    </details>
                    <details>
                        <summary>Bagaimana Merubah Status Pada KTP</summary>
                        <div>
                            <p>Pergantian KTP Elektronik, karena perubahan data</p>
                            <p>Numpang Kartu Keluarga / Pindah Kartu Keluarga</p>
                            <p class="about__description">
                                1. Kartu Keluarga terbaru <br>
                                2. KTP lama <br>
                                3. Mengisi formulir pada https://capil.balikpapan.go.id/layanan/ <br>
                            </p>
                        </div>
                    </details>
                    <details>
                        <summary>Apa Saja Persyaratan Membuat KK</summary>
                        <div>
                            <p> <b> Persyaratan Membuat KK </b> </p>
                            <p>Kartu Keluarga Baru (Baru Menikah)</p>
                            <p class="about__description">
                                1. KK dari pihak Suami <br>
                                2. KK dari pihak Istri <br>
                                3. Buku Nikah atau Akta Perkawinan <br>
                                4. Mengisi formulir pada https://capil.balikpapan.go.id/layanan/ <br>
                            </p>
                        </div>
                    </details>
                </div>
        </div>
        <!--==================== NEWS ====================-->
        <div class="row mb-3 mt-3 px-3" data-aos="fade-down">
            <div class="head" data-aos="fade-down" id="berita">
                <h1>BERITA TERKINI</h1>
            </div>
                <div class="content-wrapper" data-aos="fade-down">
                    @foreach ($berita as $b)
                    <div class="news-card ">
                        <a href="#" class="news-card__card-link"></a>
                        <img src="{{asset('storage/app/public/'.$b->foto)}}" alt="" class="news-card__image">
                            <div class="news-card__text-wrapper">
                                <h4 class="news-card__title">{{$b->judul}}</h4>
                                <div class="news-card__post-date">{{$b->created_at}}</div>
                                <div class="news-card__details-wrapper">
                                    <p class="news-card__excerpt">{!!Str::limit($b->isi, 150)!!}&hellip;</p>
                                    <a href="{{route('beritaindex.show',[$b->id])}}" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                    </div>
                    @endforeach 
                </div>
            <center>
            <a href="{{route('beritaindex.index')}}" class="btn btn-secondary btn-sm shadow h-100">Index Berita</a>
            </center>
        </div>
        <!--==================== Statistik ====================-->
        <div class="row mb-3 mt-3 px-3" data-aos="fade-down">
        <div class="col-12">
                <div class="card text-center shadow h-100">
                    <div class="card-header bg-secondary text-white">
                    Jumlah Penduduk Kota Balikpapan
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">DATA KONSOLIDASI BERSIH (DKB) SEMESTER I TAHUN 2021</h5>
                        <h1 class="card-text">704,110</h1>
                        <a href="https://capil.balikpapan.go.id/default/cetak/laporan_penduduk.php" target="_blank" class="btn btn-secondary btn-sm">Unduh Laporan Jumlah Penduduk</a>
                    </div>
                </div>
          </div>
        </div>

        <div class="row mb-3 mt-3 px-3">
            <div class="col-xl-2 col-md-2 mb-3">
                <div class="card bg-secondary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col px-3">
                        <div class="text text-white text-uppercase mb-1" style="font-size:80%;">Balikpapan Timur</div>
                        <div class="text text-white text-uppercase mb-1">91,976</div>
                      </div>
                      <div class="col mx-auto">
                        <i class="fa-solid fa-user-group fa-beat fa-2xl" style="--fa-animation-duration: 2s; color:white"></i>                         
                      </div>
                    </div>
                    <a href="#" class="text text-white mb-1 px-3" style="font-size:80%;">Selengkapnya..</a>
                  </div>
                </div>
              </div>
        
            <div class="col-xl-2 col-md-2 mb-3">
                <div class="card bg-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col px-3">
                        <div class="text text-white text-uppercase mb-1" style="font-size:80%;">Balikpapan Barat</div>
                        <div class="text text-white text-uppercase mb-1">96,351</div>
                      </div>
                      <div class="col mx-auto">
                        <i class="fa-solid fa-user-group fa-beat fa-2xl" style="--fa-animation-duration: 2s; color:white"></i>                         
                      </div>
                    </div>
                    <a href="#" class="text text-white mb-1 px-3" style="font-size:80%;">Selengkapnya..</a>
                  </div>
                </div>
              </div>
          
        
          <div class="col-xl-2 col-md-2 mb-3">
            <div class="card bg-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col px-3">
                    <div class="text text-white text-uppercase mb-1" style="font-size:80%;">Balikpapan Utara</div>
                    <div class="text text-white text-uppercase mb-1">173,521</div>
                  </div>
                  <div class="col mx-auto">
                    <i class="fa-solid fa-user-group fa-beat fa-2xl" style="--fa-animation-duration: 2s; color:white"></i>                         
                  </div>
                </div>
                <a href="#" class="text text-white mb-1 px-3" style="font-size:80%;">Selengkapnya..</a>
              </div>
            </div>
          </div>

          <div class="col-xl-2 col-md-2 mb-3">
            <div class="card bg-warning shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col px-3">
                    <div class="text text-white text-uppercase mb-1" style="font-size:80%;">Balikpapan Tengah</div>
                    <div class="text text-white text-uppercase mb-1">107,057</div>
                  </div>
                  <div class="col mx-auto">
                    <i class="fa-solid fa-user-group fa-beat fa-2xl" style="--fa-animation-duration: 2s; color:white"></i>                         
                  </div>
                </div>
                <a href="#" class="text text-white mb-1 px-3" style="font-size:80%;">Selengkapnya..</a>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-md-2 mb-3">
            <div class="card bg-danger shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col px-3">
                    <div class="text text-white text-uppercase mb-1" style="font-size:80%;">Balikpapan Selatan</div>
                    <div class="text text-white text-uppercase mb-1">149,433</div>
                  </div>
                  <div class="col mx-auto">
                    <i class="fa-solid fa-user-group fa-beat fa-2xl" style="--fa-animation-duration: 2s; color:white"></i>                         
                  </div>
                </div>
                <a href="#" class="text text-white mb-1 px-3" style="font-size:80%;">Selengkapnya..</a>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-md-2 mb-3">
            <div class="card bg-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col px-3">
                    <div class="text text-white text-uppercase mb-1" style="font-size:80%;">Balikpapan Kota</div>
                    <div class="text text-white text-uppercase mb-1">85,772</div>
                  </div>
                  <div class="col mx-auto">
                    <i class="fa-solid fa-user-group fa-beat fa-2xl" style="--fa-animation-duration: 2s; color:white"></i>                         
                  </div>
                </div>
                <a href="#" class="text text-white mb-1 px-3" style="font-size:80%;">Selengkapnya..</a>
              </div>
            </div>
          </div>
        </div>
        </main>
        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <div class="container mb-3 px-3">
                <div class="row">
                    <div class="footer-col">
                        <h4>Dukcapil Balikpapan</h4>
                        <div class="social-links">
                            <a href="https://www.facebook.com/Disdukcapilbpn"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/disdukcapilbpn/?hl=en"><i class="bx bxl-instagram"></i></a>
                            <a href="#"><i class="bx bxl-whatsapp"></i></a>
                            <p>Copyright &copy; 2022 | capil.balikpapan.go.id</p>
                        </div>
                    </div>
                    <div class="footer-col">
                        <h4>About</h4>
                        <ul>
                            <li><a href="#about">Tentang Kami</a></li>
                            <li><a href="#">PPID</a></li>
                            <li><a href="#">Program Kerja</a></li>
                            <li><a href="#">Inovasi</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Layanan</h4>
                        <ul>
                            <li><a href="#discover2">Informasi Layanan</a></li>
                            <li><a href="#place">FAQs</a></li>
                            <li><a href="#">Statistik</a></li>
                            <li><a href="portalberita/berita.php">Berita</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Alamat</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.42481938457!2d116.8678866!3d-1.2582977!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x22ca51fc7271626c!2sOffice%20of%20Population%20and%20Civil%20Registration%20Balikpapan!5e0!3m2!1sen!2sid!4v1644150835386!5m2!1sen!2sid">
                            frameborder="0"
                            allowfullscreen=""
                            aria-hidden="false"
                            tabindex="0"
                          ></iframe>
                    </div>
                </div>
            </div>
       </footer>
     
         <!--========== SCROLL UP ==========-->
         <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- bootstrap javascript cdn -->
	    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <!--=============== SCROLL REVEAL===============-->
        <script src="{{asset('public/portal/assets/js/scrollreveal.min.js')}}"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="{{asset('public/portal/assets/js/swiper-bundle.min.js')}}"></script>
        <script src="https://kit.fontawesome.com/83fe09b92c.js" crossorigin="anonymous"></script>
        <!--=============== MAIN JS ===============-->
        <script src="{{asset('public/portal/assets/js/main.js')}}"></script>
    </body>
</html>