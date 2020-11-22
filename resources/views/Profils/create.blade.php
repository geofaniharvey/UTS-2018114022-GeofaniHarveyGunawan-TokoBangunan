@extends('layouts.nav')

@section('title', 'profils')

@section('content')


<div class="card mb-3"><div class="container px-lg-5">

<div class="row justify-content-md-center">
    <div class="col-8"> 
    </div>

<div class="card-body">
    <h5 class="card-title">Tambah Toko</h5>
    <p class="card-text">Tambahkan Toko anda pada Toko Bangunan Online ini.</p>
  </div>
</div>
<hr>
  <form action="/profils" method="POST">
    @csrf
   
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Toko</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="namatoko" aria-describedby="emailHelp" value="{{ old('namatoko') }}">
      @error('namatoko')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      
    <div class="form-group">
      <label for="exampleInputPassword1">Alamat</label>
      <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" value="{{ old('alamat') }}">
      @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

</div>
    <div class="form-group">
      <label for="exampleInputPassword1">Kota</label>
      <input type="text" class="form-control" name="kota" id="exampleInputPassword1" value="{{ old('kota') }}">
      @error('kota')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Id Kota</label>
      <input type="integer" class="form-control" name="cities_id" id="exampleInputPassword1" value="{{ old('cities_id') }}">
      @error('cities_id')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
