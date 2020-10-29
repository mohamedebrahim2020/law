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
Route::get('/hima', function () {
    return view('index');
});
Route::get('/login/page', function () {
    return view('auth.login');
});
Route::get('/reset/password', function () {
    return view('auth.resetPassword');
});
Route::post('/login','AuthController@login');
