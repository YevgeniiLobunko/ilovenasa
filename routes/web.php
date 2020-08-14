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
Auth::routes();

Route::get('/',  "AllMusicController@index");
Route::get('/available_lists',  "AllMusicController@availableLists")->name('available_lists');
Route::get('/tracks/{id}', 'AllMusicController@trackInList');

Route::resource('user_lists', "UserListController");

