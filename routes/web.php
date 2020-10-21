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

Route::get('/', 'PangkatController@index')->name('pangkat.home');
Route::get('/create', 'PangkatController@create')->name('pangkat.create');
Route::post('/', 'PangkatController@store')->name('pangkat.store');
