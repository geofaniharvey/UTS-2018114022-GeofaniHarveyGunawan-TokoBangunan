@extends('layouts.nav')

@section('title', 'Daftar Kota')

@section('content')

<div class="card">
    <div class="card-body">
        <h3>Nama teman : {{ $cities['namakota'] }} </h3>
        <h3>Nomor Telp teman : {{ $cities['keterangan'] }} </h3>
    </div>
</div>
@endsection