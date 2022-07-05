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


//Route::get('/user', [UserController::class, 'index']);

Route::resource('/partidos', '\App\Http\Controllers\MatchController');
Route::get('/consultar', '\App\Http\Controllers\MatchController@consultar')->name('consultar');
//Route::resource('/partidos_champions', '\App\Http\Controllers\MatchController@champions');