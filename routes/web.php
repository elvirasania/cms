<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

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

//prak 1//
// Route::get('/', function () {
//     return "selamat datang";
// });

// Route::get('/about', function () {
//     echo "NIM     : 2041720080
//             Nama   : Elvira sania Mufida
//             Kelas  : TI -2G";
// });

// Route::get('/articles/{id}', function ($id) {
//     return "Ini adalah halaman Artikel dengan ID ke-".$id;
// });

//prak2 bagian1 //
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

//prak2 bagian2//
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);