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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('coba', function () {
    return view('backend');
});
 Route::get('awt', 'FrontendController@index');

Route::get('front', function () {
    return view('frontend.index');
});
Route::get('about', function () {
    return view('frontend.about');
});
Route::get('contact', function () {
    return view('frontend.contact');
});
Route::get('news', function () {
    return view('frontend.news');
});
Route::get('recipes', function () {
    return view('frontend.recipes');
});
Route::get('services', function () {
    return view('frontend.services');
});
