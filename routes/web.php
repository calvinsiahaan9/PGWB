<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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
    return view('welcome');
});

Route::get('/produk', function () {
    return view('produk.product');
});

Route::get('/admin', function () {
    return view('dashboard');
});

Route::get('/produk',[ProdukController::class, 'index'])
->name('produk');

Route::delete('/delete/{id}', [ProdukController::class, 'destroy'])->name('product.destroy');
