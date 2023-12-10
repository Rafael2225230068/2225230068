<?php

use App\Http\Controllers\rafaelyehudauas;
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


Route::get('/', function () {
    return view('layout.uas');
});
Route::get('UAS', [rafaelyehudauas::class, 'index']);
Route::get('UAS/TambahData', [rafaelyehudauas::class, 'create']);
Route::post('UAS/TambahData/Rafael',[rafaelyehudauas::class,'store']);
Route::resource('UAS/Rafael', rafaelyehudauas::class);




