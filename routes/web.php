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

Route::get('/', function() {
    $tariffs = \App\Tariff::all();
    return view('main-page', compact('tariffs') );
})->name('main-page');
Route::post('send', 'OrdersController@create' )->name('new-order');
