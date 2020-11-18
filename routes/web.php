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
    return view('auth.logins');
});
Route::get('/logout','WebAuthController@logout');//to be continued
Route::get('/passwordForm','WebAuthController@pass');//to be continued
Route::get('/invalid/code', function () {
    return view('auth.codeResetPassword');
});
Route::get('/invalid/password', function () {
    return view('auth.resetPassword');
});
Route::get('/dashboard/page',function (){
    return view('layouts.master'); 
});

Route::post('/login', 'WebAuthController@login');
Route::get('/password/page', 'PasswordResetController@showCodeRequestForm')->name('password.request');
Route::group([
    'prefix' => 'password'
], function () {
    Route::post('create', 'PasswordResetController@create')->name('password.email');
    Route::post('find', 'PasswordResetController@find')->name('password.code');
    Route::post('set', 'PasswordResetController@set')->name('password.reset');
});
// test 

Route::group([
    'prefix' => 'permission'
], function () {
    Route::get('usersMenu','UserController@get_users_table');
    Route::get('groupsMenu','UserController@get_groups_table');
    Route::get('createUser','UserController@get_employees_groups');
    Route::get('createGroup','UserController@get_groups');
    Route::post('store','UserController@storeUser');
    Route::post('create/group','UserController@storeGroup');

    
});

// get employees and group list
//Route::get('/employees/groups', 'UserController@get_employees_groups');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
