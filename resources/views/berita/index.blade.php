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
    <a href="{{route('berita.create')}}" class="btn btn-secondary btn-sm"><i class="fa fa-plus-circle fa-sm"></i> Tambah Berita</a>
    </div> 
</div><br>

<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
      <h6 class="m-0 font-weight-bold text-secondary">Berita</h6>
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
        <th scope="col">Judul</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Kategori</th>
        <th scope="col">Status</th>
        <th scope="col">Publish</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($berita as $b)
      <tr>
            <td>{{$loop->iteration}}</td>
            <td><a href="{{route('berita.edit',[$b->id])}}">{{$b->judul}}</a></td>    
            <td>{{$b->keterangan}}</td>
            <td>{{$b->kategori->kategori}}</td>
            <td>
                @if ($b->status == 'ACTIVE')
                <span class="badge badge-info">{{$b->status}}</span>
                @else 
                <span class="badge badge-warning">{{$b->status}}</span>
                @endif
            </td>
        <td>{{$b->user->name}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>
</div> 
@endsection