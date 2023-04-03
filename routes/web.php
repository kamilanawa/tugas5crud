<?php

use App\Http\Controllers\ProdukController;
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

route ::get('/produk',[ProdukController::class,'index']);
Route::get('/produk/{id_produk}/delete', [ProdukController::class, 'destroy']);
Route::get('/produk/add', [ProdukController::class, 'create']);
Route::post('/produk',[ProdukController::class, 'store']);
