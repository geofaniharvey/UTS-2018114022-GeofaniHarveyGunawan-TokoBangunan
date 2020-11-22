@extends('layouts.nav')

@section('title', 'Edit Kota')

@section('content')
<div class="card">
  <h5 class="card-header">Form Edit</h5>
  <div class="card-body">
    <h5 class="card-title">Edit Kota </h5>
    <hr>
    
  <form action="/cities/{{ $city['id'] }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Kota</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="namakota" aria-describedby="emailHelp" value="{{ old('namakota') ? old('namakota') : $city['namakota'] }}">
      @error('namakota')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Keterangan</label>
      <input type="text" class="form-control" name="keterangan" id="exampleInputPassword1" value="{{ old('keterangan') ? old('keterangan') : $city['keterangan']  }}">
      @error('keterangan')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>

@endsection
