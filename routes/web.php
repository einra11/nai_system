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
    return view('pages.index');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/about', function () {
    return view('pages.about');
});

Auth::routes();

Route::resource('/dashboard', 'DashboardController');
Route::resource('services','ServiceController');
Route::resource('contact','ContactController');