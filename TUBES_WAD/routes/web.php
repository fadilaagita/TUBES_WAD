<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangController;


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

Route::get('/', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/dashboard', [BarangController::class, 'index'])->name('admin.dashboard');
    //crud karyawan
    Route::get('/admin/karyawan', [KaryawanController::class, 'index'])->name('admin.karyawan.index');
    //crud supplier
    Route::get('/admin/supplier', [SupplierController::class, 'index'])->name('supplier.index');
    Route::get('/admin/supplier/create', [SupplierController::class, 'create'])->name('supplier.create');
    Route::post('/admin/supplier', [SupplierController::class, 'store'])->name('supplier.store');
    Route::get('/admin/supplier/{id}/edit', [SupplierController::class, 'edit'])->name('supplier.edit');
    Route::put('/admin/supplier/{id}', [SupplierController::class, 'update'])->name('supplier.update');
    Route::delete('/admin/supplier/{id}', [SupplierController::class, 'destroy'])->name('supplier.delete');
    Route::get('/admin/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');

    //crud barang
    Route::get('/admin/barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/admin/barang', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/admin/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('/admin/barang/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/admin/barang/{id}', [BarangController::class, 'destroy'])->name('barang.delete');
});
