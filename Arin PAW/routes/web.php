<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DataMahasiswaController;
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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/','DataMahasiswaController@index');
Route::get('/data','DataMahasiswaController@index')->name('data');
Route::get('/input','DataMahasiswaController@input')->name('input');
Route::get('/about','DataMahasiswaController@about')->name('about');
Route::get('/hapus/{id}','DataMahasiswaController@destroy')->name('hapus');
Route::get('/edit/{id}','DataMahasiswaController@edit')->name('edit');

Route::post('/inputproses','DataMahasiswaController@store')->name('inputproses');
Route::post('/editproses','DataMahasiswaController@update')->name('editproses');