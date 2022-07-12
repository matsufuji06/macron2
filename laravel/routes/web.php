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
    return view('top');
});

Auth::routes();

Route::prefix('login')->name('login.')->group(function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('{provider}');
});

Route::resource('/posts', 'PostController')->except(['index', 'show'])->middleware('auth');
Route::resource('/posts', 'PostController')->only(['index', 'show']);

Route::prefix('posts')->name('posts.')->group(function () {
    Route::put('/{post}/like', 'PostController@like')->name('like')->middleware('auth');
    Route::delete('/{post}/like', 'PostController@unlike')->name('unlike')->middleware('auth');
});