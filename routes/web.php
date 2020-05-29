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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/saved', 'SavedController@index')->name('saved');
Route::get('/works', 'WorksController@index')->name('works');
Route::get('/settings', 'SettingsController@index')->name('settings');
Route::get('/notifications', 'ProfileController@notifications')->name('notifications');
Route::resource('profile', 'ProfileController');
Route::resource('articles', 'ArticleController');
Route::resource('feed', 'PostController');
