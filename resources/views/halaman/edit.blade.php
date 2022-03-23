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
        <h6 class="m-0 font-weight-bold text-primary">Tambah Berita</h6>
      </div>
      
      <div class="card-body">
    
      @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
        @endif 

        <form action="{{route('halaman.update',[$halaman->id])}}" enctype="multipart/form-data" method="POST" class="bg-white shadow-sm p-3">
        @csrf
       <input type="hidden" value="PUT" name="_method">
        <div class="row">
          <div class="col-6">
                <label for="">Index</label>
                <select name="id_index" id="" class="form-control {{$errors->first('id_index') ? "is-invalid" : ""}}">
                    <option value=""></option>
                    @foreach ($index as $i)
                        <option @if($halaman->id_index == $i->id) selected @endif value="{{$i->id}}">{{$i->halaman}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedbeck">{{$errors->first('id_index')}}</div>
           </div>
        </div><br>
        <div class="row">
            <div class="col-6">
                  <label for="">Menu</label>
                  <select name="id_menu" id="" class="form-control {{$errors->first('id_menu') ? "is-invalid" : ""}}">
                      <option value=""></option>
                      @foreach ($menu as $m)
                          <option @if($halaman->id_menu == $m->id) selected @endif value="{{$m->id}}">{{$m->halaman}}</option>
                      @endforeach
                  </select>
                  <div class="invalid-feedbeck">{{$errors->first('id_menu')}}</div>
             </div>
          </div>
        <br>
        <div class="row">
            <div class="col-6">
                  <label for="">Halaman Index</label>
                  <select name="id_halaman" id="" class="form-control {{$errors->first('id_halaman') ? "is-invalid" : ""}}">
                      <option value=""></option>
                      @foreach ($halamanindex as $hi)
                          <option @if($halaman->id_halaman == $hi->id) selected @endif value="{{$hi->id}}">{{$hi->halaman}}</option>
                      @endforeach
                  </select>
                  <div class="invalid-feedbeck">{{$errors->first('id_halaman')}}</div>
             </div>
          </div>
        <br>
        <div class="row">
            <div class="col-12">
              <label for="">Nama Halaman</label> 
              <input type="text" name="halaman" value="{{$halaman->halaman}}" class="form-control {{$errors->first('halaman') ? "is-invalid" : ""}}" placeholder="halaman">
              <div class="invalid-feedbeck"> {{$errors->first('halaman')}}</div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-12">
              <label for="">link</label> 
              <input type="text" name="link" value="{{$halaman->link}}" class="form-control {{$errors->first('link') ? "is-invalid" : ""}}" placeholder="link">
              <div class="invalid-feedbeck"> {{$errors->first('link')}}</div>
            </div>
          </div>
          <br>
        <div class="row">
            <div class="col-12">
              <label for="">Foto</label><br>
              <label for=""><img src="{{asset('storage/app/public/'.$halaman->foto)}}" alt="" width="240px"></label>
              <input type="file" class="form-control {{$errors->first('foto') ? "is-invalid" : ""}}" name="foto">
                <div class="invalid-feedbeck"> {{$errors->first('foto')}}</div>
                <small>*file bertipe Image maximal size 5mb</small>
                <small>*Kosongkan jika Tidak Merubah Foto</small>
          </div>
        </div><br>
        <div class="row">
            <div class="col-12">
                <label for="">Article</label>
                <textarea name="isi" id="textarea" cols="30" rows="10" class="form-control">{{$halaman->isi}}</textarea>
            </div>
        </div><br>
        <div class="row">
          <div class="col-12">
            <label for="">Keterangan</label> 
            <input type="text" name="keterangan" value="{{$halaman->keterangan}}" class="form-control {{$errors->first('keterangan') ? "is-invalid" : ""}}" placeholder="keterangan">
            <div class="invalid-feedbeck"> {{$errors->first('keterangan')}}</div>
          </div>
        </div>
        <br>
        <div class="row">
            <div class="col-4">
                <label for="">Status</label>
                <select name="status" class="form-control">
                    <option @if($halaman->status == 'ACTIVE') selected @endif value="ACTIVE">ACTIVE</option>
                    <option @if($halaman->status == 'INACTIVE') selected @endif value="INACTIVE">INACTIVE</option>
                </select>
            </div>
        </div> <br>
        <button type="submit" class="btn btn-info btn-sm" value="Simpan"><i class="fa fa-save fa-sm"></i> Simpan</button>
        <a href="{{route('halaman.index')}}" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-circle-left fa-fw fa-sm"></i>Kembali</a>
        </form>
      </div>
    </div>
</div>
@endsection