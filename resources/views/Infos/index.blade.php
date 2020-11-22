@extends('layouts.nav')

@section('title', 'Info')

@section('content')

    {{ $infos->links() }}

    <ul class="list-unstyled">
  <li class="media my-5">
    <img src="/img/semen.jpg" class="mr-3" alt="...">
    <div class="media-body">  <div id="loading" style="background-color: papayawhip;">
      <h5 class="mt-0 mb-1">Semen</h5>
      Semen adalah zat yang digunakan untuk merekat batu, bata, batako, maupun bahan bangunan lainnya. Sedangkan kata semen sendiri berasal dari caementum (bahasa Latin), yang artinya "memotong menjadi bagian-bagian kecil tak beraturan". Meski sempat populer pada zamannya, nenek moyang semen made in Napoli ini tak berumur panjang. Menyusul runtuhnya Kerajaan Romawi, sekitar abad pertengahan (tahun 1100-1500 M) resep ramuan pozzuolana sempat menghilang dari peredaran.
    </div></div>
  </li>
  <li class="media my-4">
    <img src="/img/batubata.jpg" class="mr-3" alt="...">
    <div class="media-body"><div id="loading" style="background-color: papayawhip;">
      <h5 class="mt-0 mb-1">Batu  Bata</h5>
      Batu bata merupakan salah satu bahan material sebagai bahan pembuat dinding. Batu bata terbuat dari tanah liat yang dibakar sampai berwarna kemerah-merahan. Seiring perkembangan teknologi, penggunaan batu bata semakin menurun. Munculnya material-material baru seperti gipsum, bambu yang telah diolah, cenderung lebih dipilih karena memiliki harga lebih murah dan secara arsitektur lebih indah.
    </div></div>
  </li>
  <li class="media my-5">
    <img src="/img/gipsum.jpg" class="mr-3" alt="...">
    <div class="media-body"><div id="loading" style="background-color: papayawhip;">
      <h5 class="mt-0 mb-1">Gipsum</h5>
      Gipsum adalah bahan yang digunakan sebagai material kontruksi pembentuk dinding, penyekat, partisi, dan plafon rumah. Papan gipsum terbuat dari campuran bahan kertas. Tidak seperti papan konstruksi bangunan pada umumnya, papan gipsum memiliki ketebalan yang tipis yaitu sekitar 9-15 mm.
    </div></div>
  </li>
</ul>
@endsection
