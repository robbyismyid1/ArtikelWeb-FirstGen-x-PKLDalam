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
    return view('front.index');
});
Route::get('/kontak', function () {
    return view('front.contact');
});
Route::get('/post', function () {
    return view('front.single-post');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('/tag', 'TagController');
    Route::resource('/kategori', 'KategoriController');
    Route::resource('/artikel', 'ArtikelController');
});