<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;


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

//register
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/dashboard', [BarangController::class, 'index'])->name('admin.dashboard');
    //crud karyawan
    Route::get('/admin/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
    Route::get('/admin/karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
    Route::post('/admin/karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');
    Route::get('/admin/karyawan/{id}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');
    Route::put('/admin/karyawan/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');
    Route::delete('/admin/karyawan/{id}', [KaryawanController::class, 'destroy'])->name('karyawan.delete');

    //crud kategori
    Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::get('/admin/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/admin/kategori', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/admin/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('/admin/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/admin/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.delete');


    //crud supplier
    Route::get('/admin/supplier', [SupplierController::class, 'index'])->name('supplier.index');
    Route::get('/admin/supplier/create', [SupplierController::class, 'create'])->name('supplier.create');
    Route::post('/admin/supplier', [SupplierController::class, 'store'])->name('supplier.store');
    Route::get('/admin/supplier/{id}/edit', [SupplierController::class, 'edit'])->name('supplier.edit');
    Route::put('/admin/supplier/{id}', [SupplierController::class, 'update'])->name('supplier.update');
    Route::delete('/admin/supplier/{id}', [SupplierController::class, 'destroy'])->name('supplier.delete');

    //crud barang
    Route::get('/admin/barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/admin/barang', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/admin/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('/admin/barang/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/admin/barang/{id}', [BarangController::class, 'destroy'])->name('barang.delete');
});
