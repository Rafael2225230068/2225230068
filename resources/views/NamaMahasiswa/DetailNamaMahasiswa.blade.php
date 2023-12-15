@extends ('layout.web')
@section('Content')
<link type="text/css" href="{{ asset('css/ .css') }}" rel="stylesheet">
<h3>Berikut Adalah Detail Mahasiswa Pendidikan Matematika FKIP Untirta </h3>
<div class="container">
 <table class="tabledetail" border= "2" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Semester</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{$Mahasiswa->NamaMahasiswa}}</td>
                <td>{{$Mahasiswa->NIM}}</td>
                <td>{{$Mahasiswa->Semester}}</td>
                <td>{{$Mahasiswa->Email}}</td>
                <td><a class='btn btn-warning btn-sm' href="{{url('/DetailMahasiswa/'.$Mahasiswa->NamaMahasiswa.'/edit')}}">Edit</a>
                    <form onsubmit="return confirm('Apakah Yakin ingin Menghapus data {{$Mahasiswa->NamaMahasiswa}}?')" class="d-inline" action="{{'/HapusMahasiswa/'.$Mahasiswa->NamaMahasiswa}}" method="post"> @csrf @method('DELETE')
                     <button class="btn btn-danger btn-sm">Hapus</button>
                   </form></td>
            </tr>
    </tbody>
 </table>
 <div class="mb-3 backdetail"><button><a href="/NamaMahasiswa">BACK</a></button></div>
</div>
@endsection