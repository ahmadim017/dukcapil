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
        <h6 class="m-0 font-weight-bold text-info">Edit Berita</h6>
      </div>
      
      <div class="card-body">
    
      @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
        @endif 
        <form action="{{route('berita.update',[$berita->id])}}" enctype="multipart/form-data" method="POST" class="bg-white shadow-sm p-3">
        @csrf
        <input type="hidden" value="PUT" name="_method">
        <div class="row">
          <div class="col-12">
                <label for="">Judul</label>
                <input type="text" name="judul" value="{{$berita->judul}}" class="form-control {{$errors->first('judul') ? "is-invalid" : ""}}" placeholder="Judul Berita">
                <div class="invalid-feedbeck">{{$errors->first('judul')}}</div>
           </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
              <label for="">Foto</label><br>
              <label for=""><img src="{{asset('storage/app/public/'.$berita->foto)}}" alt="" width="240px"></label>
              <input type="file" class="form-control {{$errors->first('foto') ? "is-invalid" : ""}}" name="foto">
                <div class="invalid-feedbeck"> {{$errors->first('foto')}}</div>
                <small>*file bertipe Image maximal size 5mb</small>
                <small>*kosongkan jika tidak mengganti gambar</small>
          </div>
        </div><br>
        <div class="row">
            <div class="col-12">
                <label for="">Article</label>
            <textarea name="isi" id="textarea" cols="30" rows="10" class="form-control">{{$berita->isi}}</textarea>
            </div>
        </div><br>
        <div class="row">
          <div class="col-4">
            <label for="">Kategori</label>
            <select name="id_kategori" class="form-control">
              <option value=""></option>
              @foreach ($kategori as $k)
                  <option @if($k->id == $berita->id_kategori) selected @endif value="{{$k->id}}">{{$k->kategori}}</option>
              @endforeach
            </select>
          </div>
        </div><br>
        <div class="row">
          <div class="col-12">
            <label for="">Keterangan</label> 
            <input type="text" name="keterangan" value="{{$berita->keterangan}}" class="form-control {{$errors->first('keterangan') ? "is-invalid" : ""}}" placeholder="keterangan">
            <div class="invalid-feedbeck"> {{$errors->first('keterangan')}}</div>
          </div>
        </div><br>
        <div class="row">
            <div class="col-2">
                <label for="">Status</label>
                <select name="status" class="form-control">
                    <option @if ($berita->status == "ACTIVE") selected @endif value="ACTIVE">ACTIVE</option>
                    <option @if ($berita->status == "INACTIVE") selected @endif value="INACTIVE">INACTIVE</option>
                </select>
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