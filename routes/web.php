<?php

use App\Http\Controllers\stock;
use App\Models\products;
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


Route::get('/',[stock::class, 'available']);

Route::get('/add', [stock::class, 'add']);

Route::get('/product', function (){
    return view('product');
});
Route::post('/productstore', [stock::class, 'productAdd']);

Route::get('/out', [stock::class, 'out']);

Route::get('/report',function(){
    return view('report');
});

Route::post('/store', [stock::class, 'store']);
Route::post('/sale', [stock::class, 'sale']);
Route::post('/release', [stock::class, 'release']);
Route::post('/report_list', [stock::class, 'report_list']);
