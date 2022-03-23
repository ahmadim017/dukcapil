@extends('layouts.sbadmin')

@section('header')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('footer')
<script src="{{asset('public/vendor/japonline/laravel-ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('public/vendor/japonline/laravel-ckeditor/adapters/jquery.js')}}"></script>
<script>
    $('#textarea').ckeditor();
    // $('.textarea').ckeditor(); // if class is prefered.
</script>
@endsection
@section('content')
<div class="col-md-10">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Tambah Berita</h6>
      </div>
      
      <div class="card-body">
    
      @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
        @endif 
        <form action="{{route('berita.store')}}" enctype="multipart/form-data" method="POST" class="bg-white shadow-sm p-3">
        @csrf
        <div class="row">
          <div class="col-12">
                <label for="">Judul</label>
                <input type="text" name="judul" class="form-control {{$errors->first('judul') ? "is-invalid" : ""}}" placeholder="Judul Berita">
                <div class="invalid-feedbeck">{{$errors->first('judul')}}</div>
           </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
              <label for="">Foto</label>
              <input type="file" class="form-control {{$errors->first('foto') ? "is-invalid" : ""}}" name="foto">
                <div class="invalid-feedbeck"> {{$errors->first('foto')}}</div>
                <small>*file bertipe Image maximal size 5mb</small>
          </div>
        </div><br>
        <div class="row">
            <div class="col-12">
                <label for="">Article</label>
                <textarea name="isi" id="textarea" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div><br>
        <div class="row">
          <div class="col-4">
            <label for="">Kategori</label>
            <select name="id_kategori" class="form-control">
              <option value=""></option>
              @foreach ($kategori as $k)
                  <option value="{{$k->id}}">{{$k->kategori}}</option>
              @endforeach
            </select>
          </div>
        </div><br>
        <div class="row">
          <div class="col-12">
            <label for="">Keterangan</label> 
            <input type="text" name="keterangan" class="form-control {{$errors->first('keterangan') ? "is-invalid" : ""}}" placeholder="keterangan">
            <div class="invalid-feedbeck"> {{$errors->first('keterangan')}}</div>
          </div>
        </div>
        <br>
        <button type="submit" class="btn btn-info btn-sm" value="Simpan"><i class="fa fa-save fa-sm"></i> Simpan</button>
        <a href="{{route('berita.index')}}" class="btn btn-dark btn-sm"><i class="fa fa-arrow-circle-left fa-fw fa-sm"></i>Kembali</a>
        </form>
      </div>
    </div>
</div>
@endsection