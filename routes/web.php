<?php

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
    return view('welcome');
});

Route::get('/vidu1','App\Http\Controllers\ViDuController@vidu1');

Route::get('/vidu2','App\Http\Controllers\ViDuController@vidu2');
Route::post('/tinhtong','App\Http\Controllers\ViDuController@tinhtong');

Route::get("/qlsach/theloai","App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\BookController@laythongtinsach");

//Route::get("/qlsach/addtheloai","App\Http\Controllers\BookController@themtheloai");

Route::get('/qlsach/addtheloai','App\Http\Controllers\BookController@addtheloai');
Route::post('/add_tl','App\Http\Controllers\BookController@add_tl');

//Bài thực hành 2
Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');
Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');

Route::get('/sach/chitietsach/{id}','App\Http\Controllers\ViduLayoutController@chitietsach');

/*Route::get('/sach/{id}', [ViduLayoutController::class, 'chitietsach'])->name('chitietsach');

//use App\Http\Controllers\ViduLayoutController;

Route::get('/sach', [ViduLayoutController::class, 'sach'])->name('vidusach.index');
Route::get('/chitietsach/{id}', [ViduLayoutController::class, 'chitietsach'])->name('vidusach.chi_tiet');*/

Route::get('/vidu3','App\Http\Controllers\ViDuController@vidu3');