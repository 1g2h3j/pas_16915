<?php

use App\Http\Controllers\GuruContoller;
use App\Http\Controllers\MapelContoller;
use App\Http\Controllers\PembelajaranContoller;
use App\Http\Controllers\SiswaContoller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('guru',GuruContoller::class);
Route::resource('siswa',SiswaContoller::class);
Route::resource('mapel',MapelContoller::class);
Route::resource('pembelajaran',PembelajaranContoller::class);

Route::get('/guru/{guru}/delete',[GuruContoller::class,'delete']);
Route::get('/siswa/{siswa}/delete',[SiswaContoller::class,'delete']);
Route::get('/mapel/{mapel}/delete',[MapelContoller::class,'delete']);
Route::get('/pembelajaran/{pembelajaran}/delete',[PembelajaranContoller::class,'delete']);
