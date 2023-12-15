@extends ('layout.web')
@section('Content')
<link type="text/css" href="{{ asset('css/Dosen.css') }}" rel="stylesheet">
<h3>Berikut Adalah Detail Dosen Yang Ada di Pendidikan Matematika FKIP Untirta 2023</h3>
<div class="container">
 <table class="tabledetail" border= "2" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIDN</th>
            <th>NIP</th>
            <th>Jabatan</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{$data->NamaDosen}}</td>
                <td>{{$data->NIDN}}</td>
                <td>{{$data->NIP}}</td>
                <td>{{$data->Jabatan}}</td>
                <td>{{$data->Email}}</td>
                <td><a class='btn btn-warning btn-sm' href="{{url('/DetailNamaDosen/'.$data->NamaDosen.'/edit')}}">Edit</a>
                    <form onsubmit="return confirm('Apakah Yakin ingin Menghapus data {{$data->NamaDosen}}?')" class="d-inline" action="{{'/HapusNamaDosen/'.$data->NamaDosen}}" method="post"> @csrf @method('DELETE')
                     <button class="btn btn-danger btn-sm">Hapus</button>
                   </form></td>
            </tr>
    </tbody>
 </table>
 <div class="mb-3 backdetail"><button><a href="/NamaDosen">BACK</a></button></div>
</div>
@endsection