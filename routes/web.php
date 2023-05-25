<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::resource('catatan', App\Http\Controllers\CatatanController::class)->middleware('auth');

Route::post('/catatan/cari', 'App\Http\Controllers\CatatanController@index')->middleware('auth');

Route::get('/catatan/cetak', 'App\Http\Controllers\CatatanController@show')->middleware('auth');