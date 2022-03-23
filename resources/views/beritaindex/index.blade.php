@extends('layouts.detail')
@section('hero')
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(../public/portal/assets/img/IMG-20191113-WA0127.jpg);">
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
    <div class="row">
        <div class="col-12">

            <div class="row mb-3 mt-3 px-3" data-aos="fade-down">
                <div class="content-wrapper">
                <div class="head" data-aos="fade-down" id="berita">
                    <h1>BERITA TERKINI</h1>
                </div>
                    <div class="content-wrapper" data-aos="fade-down">
                        @foreach ($berita as $b)
                        <div class="news-card ">
                            <a href="{{route('beritaindex.show',[$b->id])}}" class="news-card__card-link"></a>
                            <img src="{{asset('storage/app/public/'.$b->foto)}}" alt="" class="news-card__image">
                                <div class="news-card__text-wrapper">
                                    <h5 class="news-card__title">{{$b->judul}}</h5>
                                    <div class="news-card__post-date">{{$b->created_at}}</div>
                                    <div class="news-card__details-wrapper">
                                        <p class="news-card__excerpt">{!!Str::limit($b->isi, 150)!!}&hellip;</p>
                                        <a href="{{route('beritaindex.show',[$b->id])}}" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                        </div>
                        @endforeach 
                    </div>
            </div>
        </div>
        </div>
    </div>
@endsection