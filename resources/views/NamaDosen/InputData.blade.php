@extends ('layout.web')
@section('Content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link type="text/css" href="{{ asset('css/Dosen.css') }}" rel="stylesheet">
<div class="container">
<h3>Tambah Data Dosen Pendidikan Matematika</h3>
<form class="FormTambah" method="POST" action="/TambahDataDosen/Kirim" >
    @csrf 
    <div class="mb-3">
      <label for="NamaDosen" class="form-label">Nama:</label><br>
      <input class="Input" type="text" id="NamaDosen" name="NamaDosen" class="form-control" placeholder="Nama Dosen">
    </div>
    <div class="mb-3">
      <label for="NIDN" class="form-label">NIDN:</label><br>
      <input  class="Input" type="text" id="NIDN" name="NIDN" class="form-control" placeholder="NIDN" >
    </div>
    <div class="mb-3">
      <label for="NIP" class="form-label">NIP:</label><br>
      <input class="Input" type="text" id="NIP"name="NIP" class="form-control" placeholder="NIP" >
    </div>
    <div class="mb-3">
      <label for="Jabatan" class="form-label">Jabatan:</label><br>
      <input class="Input" type="text" id="Jabatan" name="Jabatan" class="form-control" placeholder="Jabatan" >
    </div>
    <div class="mb-3">
      <label for="Email" class="form-label">Email:</label><br>
      <input class="Input" type="text" id="Email" name="Email" class="form-control" placeholder="Email" >
    </div>
    <div class="mb-3 backinput">
      <button>Tambah</button> <button><a href="/NamaDosen">BACK</a></button>
    </div>
    </div>
</form>
@endsection