<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\GuruController;
// use App\Http\Controllers\HomeController;



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

//rute baru 
Route::get('/hello/{page?}', function ($page = 1) {
    return '<h1>Hello World Laravel 8, Anda di halaman</h1>'. $page;
});

//rute baru controller
Route::get('hellocontroller/{id?}', [HelloController::class, 'index']);

//rute passing
Route::get('guru', [GuruController::class, 'index']);



Auth::routes();



Route::group(['middleware' => ['web','admin']], function () {
    Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::get('/', function () {
    //     if (Auth::user()->admin == 1) {
    //         # code...
    //         return view('adminHome');
    //     } else {
    //         # code...
    //         return view('home');
    //     }
        
    // });
});

