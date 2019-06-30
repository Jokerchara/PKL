<?php

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('.frontend.index');
});
Route::get('about', function () {
    return view('frontend.about');
});
Route::get('archived', function () {
    return view('frontend.archived');
});
Route::get('contact', function () {
    return view('frontend.contact');
});
Route::get('log', function () {
    return view('frontend.login');
});
Route::get('log', function () {
    return view('frontend.login');
});
Route::get('single-post', function () {
    return view('frontend.single-post');
});
Route::get('submit-video', function () {
    return view('frontend.submit-video');
});
Route::get('video-post', function () {
    return view('frontend.video-post');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>['auth']],
function () {
    Route::get('back', function () {return view('backend.index');});
    route::resource('catagory','CatagoryController');
    route::resource('tag','TagController');
    route::resource('artikel','ArtikelController');
});


