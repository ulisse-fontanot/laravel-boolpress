<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/posts', 'PostController@index')->name('guest.post.index');
Route::get('/posts/{slug}', 'PostController@show')->name('guest.post.show');
Route::get('/contatti', 'HomeController@contatti')->name('guest.contatti');
Route::get('/contatti', 'HomeController@contattiSent')->name('guest.contatti.sent');
Route::get('/inviato', 'HomeController@contattiInviato')->name('guest.contatti.inviato');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function () {
    Route::get('/', 'PostController@index')->name('home');
    Route::resource('/post', 'PostController');
});
