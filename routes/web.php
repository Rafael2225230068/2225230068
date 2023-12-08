<?php

use App\Http\Controllers\rafaelyehudauas;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [rafaelyehudauas::class, 'create']);
Route::resource('UAS', rafaelyehudauas::class);

