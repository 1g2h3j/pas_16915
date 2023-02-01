<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\SuperadminsController;
use App\Http\Controllers\UserController;
use App\Models\Admins;
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
    return view('view_user.login');
    // return view('blogs.index');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::resource('admin',AdminsController::class);
Route::resource('superadmin',SuperadminsController::class);
Route::resource('user',UserController::class);
Route::resource('blog',BlogsController::class);

Route::get('/user/{user}/delete',[UserController::class,'delete']);
Route::get('/admin/{admin}/delete',[AdminsController::class,'delete']);
Route::get('/blog/{blog}/delete',[BlogsController::class,'delete']);
