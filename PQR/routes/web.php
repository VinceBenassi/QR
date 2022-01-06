<?php

use App\Http\Controllers\RutPasaporteController;
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
    return view('inicio');
});

Route::post('/', 'App\Http\Controllers\RutPasaporteController@index')->name('inicio');

Route::post('registro', 'App\Http\Controllers\RegistroController@index')->name('registro');

Route::post('confirma', 'App\Http\Controllers\ConfirmaController@index')->name('confirma');

Route::post('qr', function () {
    return view('qr');
});