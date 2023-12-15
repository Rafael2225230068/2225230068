@extends ('layout.web')
@section('Content')
<link type="text/css" href="{{ asset('css/Mahasiswa.css') }}" rel="stylesheet">
<h3 class="Tampil">Berikut Adalah Nama Mahasiswa Pendidikan Matematika FKIP Untirta 2023</h3>
<div class="container">
    <div class="mb-3 Tambah"><button><a class="Tambbah" href="/TambahDataMahasiswa ">+ Tambah Nama Mahasiswa</a></button></div>
 <table class="tableTampil" border= "2" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Mahasiswa as $item)
            <tr>
                <td><a href="{{url('/DetailMahasiswa/'.$item->NamaMahasiswa)}}">{{$item->NamaMahasiswa}}</a></td>
                <td>{{$item->NIM}}</td>
            </tr>
        @endforeach
    </tbody>
 </table>
 <div >
    <p class="Text">Untuk Mengetahui Detail Terkait Nama Mahasiswa Bisa mengklik Nama Mahasiswanya</p>
    <button class="Next">{{ $Mahasiswa->links()}}</button></div>
 
</div>
@endsection