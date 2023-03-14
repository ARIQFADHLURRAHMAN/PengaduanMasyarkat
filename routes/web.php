<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PengaduanController;
use App\Http\Controllers\Admin\TanggapanController;
use App\Http\Controllers\Admin\MasyarakatController;

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

// Masyarakat
Route::get('/', [UserController::class, 'index'])->name('pekat.index');

Route::middleware(['IsMasyarakat'])->group(function () {
    Route::post('/store', [UserController::class, 'storePengaduan'])->name('pekat.store');
    Route::get('/laporan/{siapa?}', [UserController::class, 'laporan'])->name('pekat.laporan');
    Route::get('/logout', [UserController::class, 'logout'])->name('pekat.logout');
});

Route::middleware(['guest'])->group(function () {
    Route::post('/login/auth', [UserController::class, 'login'])->name('pekat.login');
    Route::get('/register', [UserController::class, 'formRegister'])->name('pekat.formRegister');
    Route::post('/register/auth', [UserController::class, 'register'])->name('pekat.register');
});

Route::prefix('admin')->group(function () {
        Route::middleware(['IsAdmin'])->group(function () {
        // Petugas
        Route::resource('petugas', PetugasController::class);
        // Masyarakat
        Route::resource('masyarakat', MasyarakatController::class);
        // Laporan
        Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');
        Route::post('getLaporan', [LaporanControler::class, 'getLaporan'])->name('laporan.getLaporan'); 
    });

    Route::middleware(['IsPetugas'])->group(function () {
         // dashboard
         Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard.index');
          // Pengaduan
        Route::resource('pengaduan', PengaduanController::class);
         // Tanggapan
         Route::post('tanggapan/createOrUpdate', [TanggapanController::class, 'createOrUpdate'])->name('tanggapan.createOrUpdate');
        //  logout
        Route::get('/logout',[AdminController::class, 'logout'])->name('admin.logout');
    });

    Route::middleware(['Isguest'])->group(function () {
        Route::get('/',[AdminController::class, 'formlogin'])->name('admin.formlogin');
        Route::post('/login',[AdminController::class, 'login'])->name('admin.login');
    });
    
    // export pdf
    Route::post('/export-pdf', [PDFController::class, 'exportpdf'])->name('export.pdf');
});