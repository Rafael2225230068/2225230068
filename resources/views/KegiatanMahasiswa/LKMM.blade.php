@extends('layout.web')
@section('Content')
    <h3>LKMM 2023 (Latihan Kepimpinan Mahasiswa Matematika)</h3>
    <p>LKMM adalah Kegiatan Dari HIMATIKA yang bertujuan untuk melatih Jiwa Kepemimpinan Mahasiswa Matematika yang dimana biasanya di sarankan untuk mengikuti saat semester 1 atau masih menjadi mahasiswa baru, karena untuk kedepannya gampang ketika ingin berorganisasi.</p>
    <p>Berikut Beberapa Dokumentasi:</p>
    <img src="{{ asset('foto/LK.jpg') }}" alt="foto">
    <img src="{{ asset('foto/MM.jpg') }}" alt="foto">
    <img src="{{ asset('foto/MTK.jpg') }}" alt="foto">
    <div class="mb-3"><button><a href="/"><-BACK</a></button></div>
@endsection