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
    Route::get('usersMenu','UserController@get_users_role');
    Route::get('getEmployees/notUser','UserController@employees_notUser');
    Route::get('getEmployees/areUser','UserController@employees_areUser');
    Route::get('getUsers','UserController@allUsers');
    Route::get('getEmployees','UserController@allEmployees');
    Route::get('getRoles','UserController@allRoles');
    Route::post('create/user','UserController@storeUser'); 
    Route::post('create/group','UserController@storeGroup');
    Route::delete('delete/user/{id}', 'UserController@destroyUser');
    Route::delete('delete/role/{id}', 'UserController@destroyRole');

});