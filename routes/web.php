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
Route::get('/verify_otp', 'Auth\LoginController@verify_otp');

Route::any('/feed', function() {
    return view('feed');
});

Route::any('/explore', function() {
    return view('explore');
});

Route::any('/activity', function() {
    return view('activity');
});

Route::any('/profile', function() {
    return view('profile');
});

Route::any('/comments', function() {
    return view('comments');
});

