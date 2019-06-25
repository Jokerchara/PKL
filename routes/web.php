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

Route::get('/', function () {
    return view('welcome');
});
Route::get('catagory', function () {
    return view('catagory');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('quize-article', function () {
    return view('quize-article');
});
Route::get('single-post', function () {
    return view('single-post');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
