@extends('layouts.sbadmin')

@section('content')

  <div class="row">
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card bg-secondary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-s font-weight-bold text-white text-uppercase mb-1">Visitor</div>
              <div class="h6 mb-0 font-weight-bold text-white">{{$visitor}}</div>
            </div>
            <div class="col-auto">
              <i class="fa fa-bar-chart fa-2x fa-beat text-gray-300" style="--fa-animation-duration: 2s;"></i>
            </div>
          </div>
          <a href="#" class="text-xs font-weight-bold text-white mb-1">Selengkapnya..</a>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card bg-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-s font-weight-bold text-white text-uppercase mb-1">Berita</div>
              <div class="h6 mb-0 font-weight-bold text-white">{{$berita}}</div>
            </div>
            <div class="col-auto">
              <i class="fa fa-bar-chart fa-2x fa-beat text-gray-300" style="--fa-animation-duration: 2s;"></i>
            </div>
          </div>
          <a href="#" class="text-xs font-weight-bold text-white mb-1">Selengkapnya..</a>
        </div>
      </div>
    </div>
  

  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card bg-light shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-s font-weight-bold text-secondary text-uppercase mb-1">Pelayanan</div>
            <div class="h6 mb-0 font-weight-bold text-secondary">{{$layanan}}</div>
          </div>
          <div class="col-auto">
            <i class="fa fa-bar-chart fa-2x fa-beat text-gray-300" style="--fa-animation-duration: 2s;"></i>
          </div>
        </div>
        <a href="#" class="text-xs font-weight-bold text-secondary mb-1">Selengkapnya..</a>
      </div>
    </div>
  </div>
</div>
  
<div class="row">
    <div class="col-xl-6 col-lg-7">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-secondary">Pelayanan Terpopuler</h6>
        </div>
          <div class="card-body">
          <div id="container3"></div>
          </div>
      </div>
    </div>
  
  <div class="col-xl-6 col-lg-7">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-secondary">Berita Terpopuler</h6>
      </div>
      <div class="card-body ">
      <div id="container2"></div>
      </div>
    </div>
  </div>
</div>


<br>
@endsection
@section('footer')
          <script src="https://code.highcharts.com/highcharts.js"></script>
          <script src="https://code.highcharts.com/modules/exporting.js"></script>
          <script src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript"> 
Highcharts.chart('container3', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f}%'
            }
        }
    },
    credits: {
    enabled: false
  },
    series: [{
        name: 'View',
        colorByPoint: true,
        data: {!!json_encode($data)!!}
    }]
});

Highcharts.chart('container2', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f}%'
            }
        }
    },
    credits: {
    enabled: false
  },
    series: [{
        name: 'Data',
        colorByPoint: true,
        data: {!!json_encode($databerita)!!}
    }]
});

    </script>  
          @endsection