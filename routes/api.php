<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/login','AuthController@login');
Route::group([       
    'middleware' => 'api',    
    'prefix' => 'password'
], function () {    
    Route::post('create', 'PasswordResetController@create');
    Route::post('find', 'PasswordResetController@find');
    Route::post('reset', 'PasswordResetController@set');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'permission'
], function () {
    Route::get('usersMenu','UserController@get_users_table');
    Route::get('createUser','UserController@get_employees_groups');
    Route::post('store','UserController@storeUser'); 
});