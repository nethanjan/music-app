<?php

use Illuminate\Support\Facades\Route;

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

// home
Route::get('/','App\Http\Controllers\RegisterController@home')->name('home');

// register
Route::get('/register','App\Http\Controllers\RegisterController@show')->name('register');
Route::post('/register','App\Http\Controllers\RegisterController@create');
Route::get('/test','App\Http\Controllers\RegisterController@test');

// login
Route::get('/login','App\Http\Controllers\LoginController@show')->name('login');
Route::post('/login','App\Http\Controllers\LoginController@authenticate')->name('login');
Route::post('/logout','App\Http\Controllers\LoginController@logout')->name('logout');

// protected routes
Route::middleware('auth')->group(function () {
    Route::get('/verify', 'App\Http\Controllers\UserController@verify')->name('verify');
    Route::get('/profile', 'App\Http\Controllers\UserController@account')->name('my-account');
    Route::post('/profile', 'App\Http\Controllers\UserController@accountUpdate');
    Route::get('/favourites', 'App\Http\Controllers\UserController@favourites')->name('my-favourites');
    Route::get('/favourites-load-more', 'App\Http\Controllers\UserController@favouritesLoadMore')->name('favourites-load-more');
    Route::get('/search','App\Http\Controllers\MainPageController@search')->name('search');
    Route::get('/make-favourite','App\Http\Controllers\MainPageController@makeFavourite')->name('make-favourite');
    Route::get('/remove-favourite','App\Http\Controllers\MainPageController@removeFavourite')->name('remove-favourite');
    Route::get('/search-load-more','App\Http\Controllers\MainPageController@searchLoadMore')->name('search-load-more');
    Route::get('/filter','App\Http\Controllers\MainPageController@filter')->name('search-filter');

    // Sns
    Route::any('/audio-transcode/sns','App\Http\Controllers\MainPageController@transcodeSns')->name('audio-transcode/sns');
});
