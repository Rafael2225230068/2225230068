@extends ('layout.web')
@section('Content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link type="text/css" href="{{ asset('css/Dosen.css') }}" rel="stylesheet">
<h3>Edit Nama Dosen Pendidikan Matematika </h3>
<form  class="FormTambah" method="POST" action="{{'/UpdateNamaDosen/'.$data->NamaDosen}}" >
  <div class="container">
    @csrf 
    @method('put')
    <div class="mb-3">
        <label for="NamaDosen" class="form-label">Nama Dosen:</label>
        <input class="Input" type="text" id="NamaDosen" name="NamaDosen" class="form-control" placeholder="NamaDosen" value="{{$data->NamaDosen}}">
      </div>
      <div class="mb-3">
        <label for="NIDN" class="form-label">NIDN:</label>
        <input class="Input"  type="text" id="NIDN" name="NIDN" class="form-control" placeholder="NIDN" value="{{$data->NIDN}}">
      </div>
      <div class="mb-3">
        <label for="NIP" class="form-label">NIP:</label>
        <input class="Input"  type="text" id="NIP"name="NIP" class="form-control" placeholder="NIP" value="'{{$data->NIP}}">
      </div>
      <div class="mb-3">
        <label for="Jabatan" class="form-label">Jabatan:</label>
        <input class="Input"  type="text" id="Jabatan" name="Jabatan" class="form-control" placeholder="Jabatan" value="{{$data->Jabatan}}">
      </div>
      <div class="mb-3">
        <label for="Email" class="form-label">Email:</label>
        <input class="Input"  type="text" id="Email" name="Email" class="form-control" placeholder="Email" value="{{$data->Email}}">
      </div>
      <div class="mb-3 backinput">
        <button>Edit</button> <button> <a  href="/NamaDosen">BACK</a></button>
      </div>
    </div>
</form>
@endsection