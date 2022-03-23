@extends('layouts.detail')
@section('hero')
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(../../../public/portal/assets/img/IMG-20191113-WA0127.jpg);">
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
@endsection
@section('content')

    <div class="row mb-3 mt-5 px-3">
        <div class="col-xl-8 col-md-8 mb-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item" aria-current="page"><h3><b>Detail Berita</b></h3></li>
            </ol>
          </nav>
            <div class="card">
                <img src="{{asset('storage/app/public/'.$berita->foto)}}" class="card-img-top" style="height: 30em;object-fit:cover">
                    <div class="card-body">
                      <h5 class="card-title"><h1><b>{{$berita->judul}}</b></h1></h5>
                      <p><i class="fa-solid fa-clock"></i> {{$berita->created_at}} <i class="fa-solid fa-eye"></i> {{$berita->view}} kali </p>
                      <p>{!!$berita->isi!!}</p>
                    </div>
            </div>
        </div>
    
        <div class="col-xl-4 col-md-4 mb-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item" aria-current="page"><h3><b>Berita Terkait</b></h3></li>
            </ol>
          </nav>
            @foreach ($terkait as $t)
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4 ">
                    <img src="{{asset('storage/app/public/'.$t->foto)}}" class="img-fluid rounded-start">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="{{route('beritaindex.show',[$t->id])}}"><h5 class="text-secondary"><b>{!!Str::limit($t->judul, 50)!!}</b></h5></a>
                      <p class="card-text">{!!Str::limit($t->isi, 100)!!}</p>
                      <p class="card-text"><small class="text-muted">{{$t->created_at}}</small></p>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
        </div>

    </div>

    
@endsection