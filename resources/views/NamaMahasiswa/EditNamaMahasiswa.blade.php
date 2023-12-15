@extends ('layout.web')
@section('Content')
<link type="text/css" href="{{ asset('css/Mahasiswa.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<h3>Edit Nama Mahasiswa Pendidikan Matematika </h3>
<form  class="FormTambah" method="POST" action="{{'/UpdateMahasiswa/'.$Mahasiswa->NamaMahasiswa}}" >
  <div class="container">
    @csrf 
    @method('put')
    <div class="mb-3">
        <label for="NamaMahasiswa" class="form-label">Nama Mahasiswa:</label><br>
        <input class="Input" type="text" id="NamaMahasiswa" name="NamaMahasiswa" class="form-control" placeholder="Nama Mahasiswa" value="{{$Mahasiswa->NamaMahasiswa}}">
      </div>
      <div class="mb-3">
        <label for="NIM" class="form-label">NIM:</label><br>
        <input class="Input"  type="text" id="NIM" name="NIM" class="form-control" placeholder="NIM" value="{{$Mahasiswa->NIM}}">
      </div>
      <div class="mb-3">
        <label for="Semester" class="form-label">Semester:</label><br>
        <input class="Input"  type="text" id="Semester" name="Semester" class="form-control" placeholder="Semester" value="{{$Mahasiswa->Semester}}">
      </div>
      <div class="mb-3">
        <label for="Email" class="form-label">Email:</label><br>
        <input class="Input"  type="text" id="Email" name="Email" class="form-control" placeholder="Email" value="{{$Mahasiswa->Email}}">
      </div>
      <div class="mb-3 backinput">
        <button>Edit</button> <button><a  href="/NamaMahasiswa">BACK</a></button>
      </div>
    </div>
</form>
@endsection