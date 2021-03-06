@extends('layouts.sbadmin')


@section('content')
<div class="col-md-8">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Tambah User</h6>
      </div>
      
      <div class="card-body">
    
      @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
        @endif 
    
      <form enctype="multipart/form-data"  class="bg-white shadow-sm p-3" action="{{route('user.update',[$user->id])}}" method="POST">
    
          @csrf
          @method('PUT')
        <label for="name">Name</label>
      <input class="form-control {{$errors->first('name') ? "is-invalid" : ""}}" value="{{old('name')}}" placeholder="Full Name" type="text" name="name" id="name"/>
        <div class="invalid-feedbeck">
        {{$errors->first('name')}}</div>  
        <br>
        <label for="">Roles</label>
          <br>
          <input class=" {{$errors->first('roles') ? "is-invalid" : ""}}" type="checkbox" name="roles" id="admin"  value="ADMIN"> 
            <label for="ADMIN">Admin</label>
          <input class=" {{$errors->first('roles') ? "is-invalid" : ""}}" type="checkbox" name="roles" id="user" value="USER"> 
            <label for="USER">User</label>
          <br>
          <hr class="my-3">
          <label for="email">Email</label>
          <input class="form-control {{$errors->first('email') ? "is-invalid" : ""}}" value="{{old('email')}}" placeholder="user@mail.com" type="text" name="email" id="email"/>
          <div class="invalid-feedbeck">
            {{$errors->first('email')}}
          </div>
          <br>
          <label for="password">Password</label>
          <input class="form-control {{$errors->first('password') ? "is-invalid" : ""}}" placeholder="password" type="password" name="password" id="password"/>
          <div class="invalid-feedbeck">
            {{$errors->first('password')}}
          </div>
          <br>
          <label for="password_confirmation">Password Confirmation</label>
          <input class="form-control {{$errors->first('password_confirmation') ? "is-invalid" : ""}}" placeholder="password confirmation" type="password" name="password_confirmation" id="password_confirmation"/>
          <div class="invalid-feedbeck">
            {{$errors->first('password_confrimation')}}
          </div>
          <br>
          <button class="btn btn-info btn-sm" type="submit" value="Save"><i class="fa fa-save fa-sm"></i> Simpan</button>
        <a href="{{route('user.index')}}" class="btn btn-dark btn-sm"><i class="fa fa-arrow-circle-left fa-fw fa-sm"></i>Kembali</a>
        </form>
      </div>
      </div>
    </div>
@endsection