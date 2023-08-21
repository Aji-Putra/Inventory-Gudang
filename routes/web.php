<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TokoController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home');




Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/data_barang', [StokController::class, 'index'])->name('indexstok');
    Route::get('/tambah_barang', [StokController::class, 'create']);
    Route::post('/stok/tambah', [StokController::class, 'store']);
    Route::get('/destroy/{id_barang}', [StokController::class, 'destroy']);
    Route::get('/stok/edit/{id_barang}', [StokController::class, 'edit']);
    Route::post('/stok/update/{id_barang}', [StokController::class, 'update']);
    //Toko
    Route::get('/data_toko', [TokoController::class, 'index'])->name('indextoko');
    Route::get('/tambah_toko', [TokoController::class, 'create']);
    Route::post('/toko/tambah', [TokoController::class, 'store']);
    Route::get('/delete/{id}', [TokoController::class, 'destroy']);
    Route::get('/toko/edit/{id}', [TokoController::class, 'edit']);
    Route::post('/toko/update/{id}', [TokoController::class, 'update']);
    //Transaksi 
    Route::get('/data_order', [OrderController::class, 'index'])->name('indexorder');
    Route::get('/tambah_order', [OrderController::class, 'create']);
    Route::post('/order/tambah', [OrderController::class, 'store']);
    Route::get('/order/edit/{id_order}', [OrderController::class, 'edit']);
    Route::post('/order/update/{id_order}', [OrderController::class, 'update'])->name('update');
    Route::get('/hapus/{id_order}', [OrderController::class, 'destroy']);
});

Route::middleware(['auth', 'manager'])->group(function () {
    Route::get('/homes', [OrderController::class, 'index']);
    Route::get('/status', [OrderController::class, 'status']);
    Route::get('/laporan', [OrderController::class, 'laporan']);
    Route::post('/updatestatus/{id_order}', [OrderController::class, 'updatestatus']);
    Route::post('/tolakorder/{id_order}', [OrderController::class, 'tolak']);
    Route::get('/printPDF', [OrderController::class, 'print']);
});
