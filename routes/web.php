<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\UtamaController;

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
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// home
Route::get('/', [UtamaController::class, 'index']);

// news
Route::prefix('/news')->group(function(){
    Route::get('/{params}', [NewsController::class, 'index']);
});

// program
Route::controller(ProgramController::class)->group(function(){
    Route::get('/program/{params}', 'index');
});

// products
Route::controller(ProductController::class)->group(function(){
    Route::get('/product/{params}', 'index');
});

// about-us
Route::get('/about-us', [TentangController::class, 'index']);
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\Sock\HomeController::class, 'index']);
Route::get('/about', [App\Http\Controllers\Sock\HomeController::class, 'about']);
Route::get('/clients', [App\Http\Controllers\Sock\HomeController::class, 'clients']);
