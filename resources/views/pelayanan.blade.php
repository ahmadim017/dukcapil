@extends('layouts.detail')
@section('hero')
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(../../public/portal/assets/img/IMG-20191113-WA0127.jpg);">
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
    <div class="head">
        <h1>{{$halaman->halaman}}</h1>
    </div>
<div class="row mb-3 mt-3 px-3">
    <div class="class col 12">
        <div class="card ">
                <div class="card-header">
                    {{$halaman->halaman}}
                </div>
                <div class="card-body">
                {!!$halaman->isi!!}
                </div>
        </div>
        <div class="row mb-3 mt-3 px-3">
            <a href="{{route('dukcapil')}}" class="btn btn-secondary shadow h-100">Kembali</a>
        </div>
        
    </div>
</div>
    
@endsection