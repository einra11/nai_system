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
    $publish = App\Publish::orderBy('created_at','desc')->paginate(2);
    return view('pages.index')->with('publish',$publish);
});
Route::get('/gallery', function () {
    $publish = App\Publish::orderBy('created_at','desc')->get();
    return view('pages.gallery')->with('publish',$publish);
});

Route::get('/about', function () {
    return view('pages.about');
});

Auth::routes();

Route::resource('/dashboard', 'DashboardController');
Route::resource('services','ServiceController');
Route::resource('contact','ContactController');
Route::resource('publish','PublishController');