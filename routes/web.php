<?php

use Illuminate\Support\Facades\Auth;
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
    Route::get('/invalid/code', function () {
        return view('auth.codeResetPassword');
    });
    Route::get('/invalid/password', function () {
        return view('auth.resetPassword');
    });

Route::post('/login','WebAuthController@login')->name('login');
Route::get('/password/page', 'PasswordResetController@showCodeRequestForm')->name('password.request');
Route::group([           
    'prefix' => 'password'
], function () {    
    Route::post('create', 'PasswordResetController@create')->name('password.email');
    Route::post('find', 'PasswordResetController@find')->name('password.code');
    Route::post('set', 'PasswordResetController@set')->name('password.reset');
});




