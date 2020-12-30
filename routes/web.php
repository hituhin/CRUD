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

Route::get('/',    'App\Http\Controllers\Backend\studentController@index')-> name('home');
Route::get('create', 'App\Http\Controllers\Backend\studentController@create')-> name('create');
Route::post('create', 'App\Http\Controllers\Backend\studentController@stor')-> name('stor');
Route::get('edit/{id}', 'App\Http\Controllers\Backend\studentController@edit')-> name('edit');
Route::put('update/{id}', 'App\Http\Controllers\Backend\studentController@update')-> name('update');
Route::delete('delete/{id}', 'App\Http\Controllers\Backend\studentController@delete')-> name('delete');
