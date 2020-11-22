@extends('layouts.nav')

@section('title', 'Home')

@section('content')

    {{ $homes->links() }}


    <div class="container px-lg-5">

    <div class="row justify-content-md-center">
        <div class="col-8">
      
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/pp.jpg" class="d-block w-100" alt="Profile">
    </div>
    <div class="carousel-item">
      <img src="img/mat.jpg" class="d-block w-100" alt="Materials">
    </div>
    <div class="carousel-item">
      <img src="img/fur.jpg" class="d-block w-100" alt="Furnitures">
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
    </div>

        <div class="alert alert-warning" role="alert">
          <marquee>Selamat Datang di Toko Bangunan Online -- by Geofani Harvey G</marquee>
        </div>

        <div class="row row-cols-1 row-cols-md-3">

  <div class="col-md-auto">
            <div class="card" style="width: 18rem;">
  <img src="img/pf.jpg" class="card-img-top" alt="Profile">
  <div class="card-body">
    <p class="card-text"><a href="/profils/create">Tambah Toko</a></p>
</div>
        </div>
    </div>

    <div class="col-md-auto">
            <div class="card" style="width: 18rem;">
  <img src="img/mat1.jpg" class="card-img-top" alt="Materials">
  <div class="card-body">
    <p class="card-text"><a href="/cities">Daftar Kota</a></p>
</div>
        </div>
    </div>

    <div class="col-md-auto">
            <div class="card" style="width: 18rem;">
  <img src="img/fur1.jpg" class="card-img-top" alt="Furnitures">
  <div class="card-body">
    <p class="card-text"><a href="/infos">Info</a></p>
</div>
        </div>
    </div>

  </div>
</div>
</div>
@endsection
