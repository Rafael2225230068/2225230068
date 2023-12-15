@extends ('layout.web')
@section('Content')
<link type="text/css" href="{{ asset('css/Dosen.css') }}" rel="stylesheet">
<h3 class="Tampil">Berikut Adalah Nama Dosen Yang Ada di Pendidikan Matematika FKIP Untirta 2023</h3>
<div class="container">
    <div class="mb-3 Tambah"><button><a class="Tambbah" href="/TambahDataDosen ">+ Tambah Nama Dosen</a></button></div>
 <table class="tableTampil" border= "2" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIDN</th>
            <th>Jabatan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td><a href="{{url('/DetailNamaDosen/'.$item->NamaDosen)}}">{{$item->NamaDosen}}</a></td>
                <td>{{$item->NIDN}}</td>
                <td>{{$item->Jabatan}}</td>
            </tr>
        @endforeach
    </tbody>
 </table>
 <div >
    <p class="Text">Untuk Mengetahui Detail Terkait Nama Dosen Bisa mengklik Nama Dosennya</p>
    <button class="Next">{{ $data->links()}}</button></div>
 
</div>
@endsection