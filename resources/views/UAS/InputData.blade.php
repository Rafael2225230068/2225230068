@extends ('layout.rafael')
@section('content')
<div class="container">
<h3>Input Data Pemain Bola Voli Tangerang FC</h3>
<form method="POST" action="/UAS/TambahData/Rafael" >
    @csrf 
    <div class="mb-3">
        <label for="Nama" class="form-label">Nama:</label>
        <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Nama" value="{{Session::get('Nama')}}">
      </div>
      <div class="mb-3">
        <label for="NIM" class="form-label">NIM:</label>
        <input type="Number" id="NIM" name="NIM" class="form-control" placeholder="Nim"  value="{{Session::get('NIM')}}">
      </div>
      <div class="mb-3">
        <label for="Jurusan" class="form-label">Jurusan:</label>
        <input type="text" id="Jurusan"name="Jurusan" class="form-control" placeholder="Jurusan"  value="{{Session::get('Jurusan')}}">
      </div>
      <div class="mb-3">
        <label for="Semester" class="form-label">Semester:</label>
        <input type="text" id="Semester" name="Semester" class="form-control" placeholder="Semester"  value="{{Session::get('Semester')}}">
      </div>
      <div class="mb-3">
        <label for="NomorTelepon" class="form-label">No. Telepon:</label>
        <input type="text" id="NomorTelepon" name="NomorTelepon" class="form-control" placeholder="Semester"  value="{{Session::get('NomorTelepon')}}">
      </div>
      <div class="mb-3">
        <button>Submit</button>
      </div>
    </div>
</form>
@endsection