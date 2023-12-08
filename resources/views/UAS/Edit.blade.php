@extends ('layout/uas')
@section('content')
<h3>Edit Data Pemain Bola Voli Untirta</h3>
<form method="POST" action="{{'/UAS/'.$data->Nama}}" >
    @csrf 
    @method('put')
    <div class="mb-3">
        <label for="Nama" class="form-label">Nama:</label>
        <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Nama" value="{{$data->Nama}}">
      </div>
      <div class="mb-3">
        <label for="NIM" class="form-label">NIM:</label>
        <input type="Number" id="NIM" name="NIM" class="form-control" placeholder="Nim" value="{{$data->NIM}}">
      </div>
      <div class="mb-3">
        <label for="Jurusan" class="form-label">Jurusan:</label>
        <input type="text" id="Jurusan"name="Jurusan" class="form-control" placeholder="Jurusan" value="'{{$data->Jurusan}}">
      </div>
      <div class="mb-3">
        <label for="Semester" class="form-label">Semester:</label>
        <input type="text" id="Semester" name="Semester" class="form-control" placeholder="Semester" value="{{$data->Semester}}">
      </div>
      <div class="mb-3">
        <label for="NomorTelepon" class="form-label">No. Telepon:</label>
        <input type="text" id="NomorTelepon" name="NomorTelepon" class="form-control" placeholder="Semester" value="{{$data->NomorTelepon}}">
      </div>
      <div class="mb-3">
        <button>Edit</button> <a class="btn btn-secondry" href="/UAS">Kembali</a>
      </div>
      
</form>
@endsection