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
Route::get('/','RegisterController@home')->name('home');

// register
Route::get('/register','RegisterController@show')->name('register');
Route::post('/register','RegisterController@create');
Route::get('/test','RegisterController@test');

// login
Route::get('/login','LoginController@show')->name('login');
Route::post('/login','LoginController@authenticate')->name('login');
Route::post('/logout','LoginController@logout')->name('logout');
Route::get('/forgot-password','LoginController@forgotPassword')->name('forgot-password');
Route::post('/forgot-password','LoginController@sendForgotPassword')->name('forgot-password');
Route::get('/password-reset','LoginController@passwordResetView')->name('password-reset');
Route::post('/password-reset','LoginController@passwordResetPost')->name('password-reset');

Route::get('/verify-email','MainPageController@verifyEmail')->name('verify-email');

// Sns
Route::any('/audio-transcode/sns','MainPageController@transcodeSns')->name('audio-transcode/sns');

// protected routes
Route::middleware('auth')->group(function () {
    Route::get('/verify', 'UserController@verify')->name('verify');
    Route::post('/resend-verify', 'UserController@resendVerify')->name('resend-verify');
    Route::get('/profile', 'UserController@account')->name('my-account');
    Route::post('/profile', 'UserController@accountUpdate');
    Route::get('/favourites', 'UserController@favourites')->name('my-favourites');
    Route::get('/favourites-load-more', 'UserController@favouritesLoadMore')->name('favourites-load-more');
    Route::get('/search','MainPageController@search')->name('search');
    Route::get('/make-favourite','MainPageController@makeFavourite')->name('make-favourite');
    Route::get('/remove-favourite','MainPageController@removeFavourite')->name('remove-favourite');
    Route::get('/search-load-more','MainPageController@searchLoadMore')->name('search-load-more');
    Route::get('/filter','MainPageController@filter')->name('search-filter');
});

Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('/', 'Admin\DashboardController@index');
    Route::resource('/users', 'Admin\UserController');
    Route::resource('/energy-levels', 'Admin\EnergyLevelController');
    Route::resource('/genres', 'Admin\GenreController');
    Route::resource('/instruments', 'Admin\InstrumentController');
    Route::resource('/moods', 'Admin\MoodController');
    Route::resource('/songs', 'Admin\SongController');
    Route::get('/songs/multiple/upload', 'Admin\SongController@bulkCreate');
    Route::post('/songs/multiple/upload', 'Admin\SongController@bulkStore');
});
