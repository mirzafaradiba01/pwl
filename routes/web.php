<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function(){
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

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    //Praktikum 7
        Route::get('/mahasiswa/{id}/show',[MahasiswaController::class, 'nilai']);   
        Route::get('/mahasiswa/cetak_pdf/{id}', [MahasiswaController::class, 'cetak_pdf']);
        Route::resource('/mahasiswa', MahasiswaController::class)->parameter('mahasiswa', 'id');    
    //Praktikum Pertemuan 10
        Route::resource('articles', ArticleController::class);
        Route::get('articlecetak', [ArticleController::class, 'cetak_pdf']);
});




