@extends('layout.web')
@section('Content')
    <p>Penjemputan diwakilkan Oleh Organisasi Mahasiswa yang ada di Pendidikan Matematika Yaitu Himatika FKIP Untirta dilakukan saat hari terakhir Ospek Fakultas pada tanggal 19 Agustus 2023. Para Mahasiswa tetap berantusias walaupun sudah lelah melakukan kegiatan ospek dan sudah malam hari</p>
    <p>Berikut Beberapa Dokumentasi:</p>
    <img src="{{ asset('foto/Penjemputan.jpg') }}" alt="foto">
    <img src="{{ asset('foto/Mahasiswa.jpg') }}" alt="foto"> <br>
    <img src="{{ asset('foto/Baru.jpg') }}" alt="foto">
    <img src="{{ asset('foto/2023.jpg') }}" alt="foto">
    <div class="mb-3"><button><a href="/"><-BACK</a></button></div>
@endsection