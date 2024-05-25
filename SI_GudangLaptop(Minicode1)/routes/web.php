<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

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

//Route untuk ke menu halaman dashboard
//index merupakan function yang ada di dalam controller untuk menampilkan halaman dashboard
Route::get('/', [DashboardController::class,'index'])->name('home');

//Route untuk ke menu halaman data laptop
//index merupakan function yang ada di dalam controller untuk menampilkan halaman data laptop
Route::get('/laptop', [LaptopController::class,'index'])->name('laptop');
//Route untuk ke menu halaman tambah data laptop
//index merupakan function yang ada di dalam controller untuk menampilkan halaman tambah data laptop
Route::get('/laptop-create', [LaptopController::class,'create'])->name('laptop-create');

//Route untuk ke menu halaman data pembelian
//index merupakan function yang ada di dalam controller untuk menampilkan halaman data pembelian
Route::get('/pembelian', [PembelianController::class,'index'])->name('pembelian');
//Route untuk ke menu halaman tambah data laptop
//index merupakan function yang ada di dalam controller untuk menampilkan halaman tambah data laptop
Route::get('/pembelian-create', [PembelianController::class,'create'])->name('pembelian-create');

//Route untuk ke menu halaman data penjualan
//index merupakan function yang ada di dalam controller untuk menampilkan halaman data penjualan
Route::get('/penjualan', [PenjualanController::class,'index'])->name('penjualan');
//Route untuk ke menu halaman tambah data penjualan
//index merupakan function yang ada di dalam controller untuk menampilkan halaman tambah data penjualan
Route::get('/penjualan-create', [PenjualanController::class,'create'])->name('penjualan-create');

//Route untuk ke menu halaman data stok
//index merupakan function yang ada di dalam controller untuk menampilkan halaman data stok
Route::get('/stok', [StokController::class,'index'])->name('stok');
//Route untuk ke menu halaman tambah data laptop
//index merupakan function yang ada di dalam controller untuk menampilkan halaman tambah data laptop
Route::get('/stok-create', [StokController::class,'create'])->name('stok-create');

//Route untuk ke menu halaman data supplier
//index merupakan function yang ada di dalam controller untuk menampilkan halaman data stok
Route::get('/supplier', [SupplierController::class,'index'])->name('supplier');
//Route untuk ke menu halaman tambah data laptop
//index merupakan function yang ada di dalam controller untuk menampilkan halaman tambah data laptop
Route::get('/supplier-create', [SupplierController::class,'create'])->name('supplier-create');


