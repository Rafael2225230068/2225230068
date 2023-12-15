<?php

use App\Http\Controllers\DataMahasiswaa;
use App\Http\Controllers\DataNamaDosenn;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// bisa menggunakan resource bisa juga menggunakan satu" routenya

Route::get('/', function () {
    return view('layout.home');
});
Route::get('UserManual', function(){
    return view('UserManual.UserManual');
});
Route::get('PenjemputanMahasiswa', function(){
    return view('KegiatanMahasiswa.Penjemputan');
});
Route::get('SIGMA2023', function(){
    return view('KegiatanMahasiswa.Sigma');
});
Route::get('LKMM2023', function(){
    return view('KegiatanMahasiswa.LKMM');
});
Route::get('TEMATIK2023', function(){
    return view('KegiatanMahasiswa.Tematik');
});
Route::get('VisiJurusan', function(){
    return view('Tentang.VisiJurusan');
});
Route::get('StrukturJurusan', function(){
    return view('Tentang.StrukturJurusan');
});
Route::get('AkreditasiJurusan', function(){
    return view('Tentang.Akreditasi');
});
Route::get('SyaratSeminarProposal', function(){
    return view('Akademik.SyaratSempro');
});
Route::get('SyaratSidangSkripsi', function(){
    return view('Akademik.SyaratSidangSkripsi');
});
// Data Dosen
Route::get('NamaDosen',[DataNamaDosenn::class,'TampilDataDosen']);
Route::get('TambahDataDosen', [DataNamaDosenn::class, 'TambahDataDosen']);
Route::post('TambahDataDosen/Kirim', [DataNamaDosenn::class,'KirimDataDosen']);
Route::get('DetailNamaDosen/{id}', [DataNamaDosenn::class, 'DetailDataDosen'] );
Route::get('DetailNamaDosen/{id}/edit', [DataNamaDosenn::class, 'EditDataDosen'] );
Route::put('UpdateNamaDosen/{id}', [DataNamaDosenn::class, 'UpdateDataDosen'] );
Route::delete('HapusNamaDosen/{id}', [DataNamaDosenn::class, 'HapusDataDosen']);
// akhir data dosen
// data mahasiswa
Route::get('NamaMahasiswa',[DataMahasiswaa::class,'tampilmahasiswa']);
Route::get('TambahDataMahasiswa',[DataMahasiswaa::class,'Tambahmahasiswa']);
Route::post('TambahDataMahasiswa/Kirim',[DataMahasiswaa::class,'Kirimdata']);
Route::get('DetailMahasiswa/{id}',[DataMahasiswaa::class,'DetailMahasiswa']);
Route::get('DetailMahasiswa/{id}/edit',[DataMahasiswaa::class,'EditNamaMahasiswa']);
Route::put('UpdateMahasiswa/{id}',[DataMahasiswaa::class,'UpdateMahasiswa']);
Route::delete('HapusMahasiswa/{id}',[DataMahasiswaa::class,'HapusNamaMahasiswa']);
// akhir data mahasiswa









