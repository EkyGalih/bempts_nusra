<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Rote for user

Route::get('/','InformasiController@home');
Route::get('/home','InformasiController@home');
Route::get('/about','InformasiController@about');
Route::get('/admin','InformasiController@admin');
Route::get('/tujuan','InformasiController@tujuan');

// end route for user

// route for admin

route::get('/beranda','AdminController@beranda');
route::get('/agenda','AdminController@agenda');
route::get('/add_agenda','AdminController@add_agenda');

// endroute for admin