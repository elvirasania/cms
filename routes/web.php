<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return "selamat datang";
});

Route::get('/about', function () {
    echo "NIM     : 2041720080
            Nama   : Elvira sania Mufida
            Kelas  : TI -2G";
});

Route::get('/articles/{id}', function ($id) {
    return "Ini adalah halaman Artikel dengan ID ke-".$id;
});