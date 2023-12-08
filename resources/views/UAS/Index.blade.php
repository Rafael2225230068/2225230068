@extends ('layout/uas')
@section('content')
<a href="/" class= "btn btn-primary">+Tambah Data Pemain Bola Voli</a>
<p></p>
 <table class=table border= "2" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Semester</th>
            <th>Nomor Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{$item->Nama}}</td>
                <td>{{$item->NIM}}</td>
                <td>{{$item->Jurusan}}</td>
                <td>{{$item->Semester}}</td>
                <td>{{$item->NomorTelepon}}</td>
                <td>
                    <a class='btn btn-warning btn-sm' href="{{url('/UAS/'.$item->Nama.'/edit')}}">Edit</a>
                   <form onsubmit="return confirm('Apakah Yakin?')" class="d-inline" action="{{'/UAS/'.$item->Nama}}" method="post"> @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
 </table>
@endsection