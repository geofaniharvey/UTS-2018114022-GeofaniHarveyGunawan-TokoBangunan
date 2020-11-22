@extends('layouts.nav')

@section('title', 'Tambah Kota')

@section('content')


<div class="card mb-3"><div class="container px-lg-5">

<div class="row justify-content-md-center">
    <div class="col-8"> 
    </div>

<div class="card-body">
    <h5 class="card-title">Tambah Kota</h5>
    <p class="card-text">Tambahkan daerah cakupan Kota anda disini.</p>
  </div>
</div>


  <form action="/cities" method="POST">
    @csrf
   
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Kota</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="namakota" aria-describedby="emailHelp" value="{{ old('namakota') }}">
      @error('namakota')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Keterangan</label>
      <input type="text" class="form-control" name="keterangan" id="exampleInputPassword1" value="{{ old('keterangan') }}">
      @error('keterangan')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
