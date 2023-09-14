<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UasController;
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

// Tampil data
Route::get('/21312011', [UasController::class, 'index'])->name('npm.index');

// Form tambah data
Route::get('/21312011/create', [UasController::class, 'create'])->name('npm.create');

// Proses tambah data
Route::post('/21312011', [UasController::class, 'store'])->name('npm.store');

// Form edit data
Route::get('/21312011/{id}/edit', [UasController::class, 'edit'])->name('npm.edit');

// Proses edit data
Route::put('/21312011/{id}', [UasController::class, 'update'])->name('npm.update');

// Proses hapus data
Route::delete('/npm/{id}', [UasController::class, 'destroy'])->name('npm.destroy');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
