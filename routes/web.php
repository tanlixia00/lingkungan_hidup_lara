<?php

use App\Http\Controllers\BackEndController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'FrontEndController@index');
Route::get('/home', 'FrontEndController@index');



Auth::routes();
Route::resource('frontend', 'FrontEndController');
Route::resource('satwa', 'BackEndController');
Route::get('/pengaduan', 'FrontEndController@pengaduan');
Route::get('/lokasi', 'FrontEndController@lihatLokasi');
Route::get('/satwadetail{id}', 'FrontEndController@satwadetail');
Route::get('/satwaEditdetail{id}', 'BackEndController@satwaEditdetail');
Route::get('/backend', 'BackEndController@index');
Route::get('/cek_pengaduan', 'BackEndController@cek_pengaduan');
Route::get('/proses_pengaduan{id}', 'BackEndController@proses_pengaduan');
Route::get('/destroy_pengaduan{id}', 'BackEndController@destroyPengaduan');