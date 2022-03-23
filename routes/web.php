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

Route::get('/', 'dukcapilController@index')->name('dukcapil');


Auth::routes();

Route::resource('user', userController::class);

Route::resource('berita', beritaController::class);

Route::resource('halaman', halamanController::class);

Route::resource('galeri', galeriController::class);

Route::get('/dashboard','dashController@index')->name('dash.index');

Route::get('/home', 'HomeController@index')->name('home');

route::get('/pelayanan/{id}/detail','dukcapilController@show')->name('pelayanan');

route::get('/index/berita','dukcapilController@beritaIndex')->name('beritaindex.index');

route::get('/index/berita/{id}/detail','dukcapilController@beritaShow')->name('beritaindex.show');

