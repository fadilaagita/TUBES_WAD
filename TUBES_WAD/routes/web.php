<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SupplierController;


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
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    //crud karyawan
    Route::get('/admin/karyawan', [KaryawanController::class, 'index'])->name('admin.karyawan.index');
    //crud supplier
    Route::get('/admin/supplier', [SupplierController::class, 'index'])->name('supplier.index');
    Route::get('/admin/supplier/create', [SupplierController::class, 'create'])->name('supplier.create');
    Route::post('/admin/supplier/store', [SupplierController::class, 'store'])->name('supplier.store');
    Route::get('/admin/supplier/{id}/edit', [SupplierController::class, 'edit'])->name('supplier.edit');
    Route::put('/admin/supplier/{id}', [SupplierController::class, 'update'])->name('supplier.update');
    Route::delete('/admin/supplier/{id}', [SupplierController::class, 'destroy'])->name('supplier.delete');
});
