<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('siswa', 'Api\SiswaController');
Route::resource('catagory', 'Api\CatagoryController');
Route::resource('artikel', 'Api\ArtikelController');
Route::resource('tag', 'Api\TagController');
Route::resource('frontend', 'frontend\index');
Route::resource('welcome', 'WelcomeController');

Route::get('videoolahraga', 'Api\FrontendController@videoolahraga');
Route::get('news', 'Api\FrontendController@news');
Route::get('footer1', 'Api\FrontendController@footer1');
Route::get('videoterakhir', 'Api\FrontendController@videoterakhir');
Route::get('kategori', 'Api\FrontendController@kategori');
Route::get('tag', 'Api\FrontendController@tag');
Route::get('index', 'Api\FrontendController@index');
