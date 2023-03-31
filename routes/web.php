<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [DashboardController::class, 'dashboard']);

Route::resource('Mahasiswas', MahasiswaController::class);

Route::get('datamahasiswa', [MahasiswaController::class, 'index']);

Route::get('tambah', [MahasiswaController::class, 'add'])->middleware(['auth','verified']);
Route::post('tambah/store', [MahasiswaController::class, 'store'])->middleware(['auth','verified']);

Route::get('datamahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->middleware(['auth','verified']);
Route::put('datamahasiswa/{id}/update', [MahasiswaController::class, 'update'])->middleware(['auth','verified']);

Route::delete('datamahasiswa/{id}', [MahasiswaController::class, 'destroy'])->middleware(['auth','verified']);

require __DIR__.'/auth.php';