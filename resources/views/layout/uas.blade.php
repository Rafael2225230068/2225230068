@extends ('layout.rafael')
@section('content')
<link type="text/css" href="{{ asset('css/rafael.css') }}" rel="stylesheet">
<div class="jumbotron jumbotron-fluid">
   <div class="container"> <h1 class="display-4">Selamat datang, di Tangerang Fc Bola Voli</h1></div>
</div>
<div class="row foto ">
    <div class="col-6 voli">
    <img src={{ asset('foto/voli.jpeg') }} alt="foto" class="img-fluid">
    </div>
    <div class="col-5 tulisan">
        <h3> Latihan Setiap Hari Rabu, Kamis dan Jumat pada pukul 18.00-selesai di lapangan AY </h3>
        <p class="text">Menambah kemampuan anda bermain voli</p>
        <a href="/UAS/TambahData" class="btn btn-success join">Join Us!</a>
    </div>
</div>
@endsection
