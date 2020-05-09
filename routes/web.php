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

Route::get('/vf', function () {
    return view('form');
});

Route::get('/live_search', 'LiveSearch@index')->name('live_search');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');

Route::get('arts', 'ArtController@index')->name('arts');