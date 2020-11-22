@extends('layouts.nav')

@section('title', 'Kota Terdaftar')

@section('content')


<div class="card mb-3"><div class="container px-lg-5">

<div class="row justify-content-md-center">
    <div class="col-8">
  
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
  <img src="img/prof.jpg" class="d-block w-100" alt="Cirebon">
</div>
<div class="carousel-item">
  <img src="img/prof1.jpg" class="d-block w-100" alt="Bandung">
</div>
<div class="carousel-item">
  <img src="img/prof2.jpg" class="d-block w-100" alt="Jakarta">
</div>
<div class="carousel-item">
  <img src="img/prof3.jpg" class="d-block w-100" alt="Surabaya">
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div> 
    </div>
</div></div>
<div class="card-body">
    <h5 class="card-title">Kota</h5>
    <p class="card-text">Berikut beberapa Kota yang sudah terdaftar dalam Toko Bangunan Online ini.</p>
  </div>
</div>

<div class="col mb-4"><a href="/cities/create">
<button type="button" class="btn btn-primary btn-lg btn-block">Tambah Kota</button></a>
</div>

@foreach ($cities as $city)

<div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-4">
    <div class="card h-100">
  <div class="card-body">
    <a href="/cities/{{ $city['id'] }}"class="card-title">{{ $city['namakota'] }}</a>
    <p class="card-text">{{ $city['keterangan'] }}.</p>
<hr>
          @foreach ($city->profils as $profil)
          <li> {{$profil->namatoko}} </li>
          @endforeach

    <a href="/cities/{{ $city['id'] }}/edit" class="card-link btn-warning">Edit Kota</a>
    <form action="/cities/{{ $city['id']}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Delete Kota</button>
    </form>
  </div>
</div>
</div>
</div>
@endforeach
<div>
    {{ $cities->links() }}
</div>
@endsection