<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo "NIM : 2141720254 <br>  Nama : Mirza Priscilla Faradiba";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman Artikel Dengan ID " .$id ;
// });

// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'show']);

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get('/articles/{id}', [ArticleController::class, 'show']);

// Route::get('/home', function () {
//         return "<h1>Hallo Mirza Prsicilla Selamat Datang di WEB Educa Studio</h1>";
//     });

// Route::prefix('product')->group(function () {
//     Route::get('/list', [PageController::class, 'product']);
//    });

// Route::get('/news/{parameter}', [PageController::class, 'news']);

// Route::prefix('program')->group(function () {
//     Route::get('/list', [PageController::class, 'program']);
//    });

// Route::get('/aboutus', [PageController::class, 'aboutus']);

// Route::resource('contact-us', PageController::class)->only(['index']);

//PRAKTIKUM 1 PERTEMUAN 3
Route::get('/home', [PagesController::class, 'home']);

Route::prefix('product') ->group(function (){
    Route::get('/', [PagesController::class, 'product']);
});

Route::get('/news/{param}', [PagesController::class, 'news']);

Route::prefix('program')->group(function () {
        Route::get('/', [PagesController::class, 'program']);
       });

Route::get('/aboutus', [PagesController::class, 'aboutus']);

Route::resource('contact-us', PagesController::class)->only(['index']);

//PRAKTIKUM 2 PERTEMUAN 3

Route::get('/prak2', function (){
    return view ('layout.template');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/kuliah', [KuliahController::class, 'index']);


//PRAKTIKUM PERTEMUAN 4
Route::get('/kendaraan', [KendaraanController::class, 'index']);

//TUGAS
Route::get('/hobi', [HobiController::class, 'index']);
Route::get('/keluarga', [KeluargaController::class, 'index']);
Route::get('/matakuliah', [MatakuliahController::class, 'index']);