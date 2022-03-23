@extends('layouts.sbadmin')
@section('header')
<link href="{{asset('public/sbadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('footer')
<script src="{{asset('public/sbadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/sbadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/sbadmin/js/demo/datatables-demo.js')}}"></script>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 text-right">
    <a href="{{route('halaman.create')}}" class="btn btn-secondary btn-sm"><i class="fa fa-plus-circle fa-sm"></i> Tambah Halaman</a>
    </div> 
</div><br>

<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
      <h6 class="m-0 font-weight-bold text-secondary">Halaman</h6>
    </a>

    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample">
      <div class="card-body">

    @if(session('status'))
      <div class="alert alert-success">
        {{session('status')}}
      </div>
    @endif 
  
    @if(session('Status'))
      <div class="alert alert-danger">
      {{session('Status')}}
    </div>
    @endif
<div class="table-responsive">    
<table class="table table-striped" id="dataTable">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Halaman</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($halaman as $h)
      <tr>
            <td>{{$loop->iteration}}</td>    
            <td><a href="{{route('halaman.edit',[$h->id])}}">{{$h->halaman}}</a></td>
            <td>
                @if ($h->status == 'ACTIVE')
                <span class="badge badge-info">{{$h->status}}</span>
                @else 
                <span class="badge badge-warning">{{$h->status}}</span>
                @endif
            </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>
</div> 
@endsection