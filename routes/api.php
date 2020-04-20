<?php

use Illuminate\Http\Request;

/*php
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*******ROTA APP VUE JS */
Route::apiResources(['user' => 'API\UserController']);
Route::get('profile', 'API\UserController@profile');
Route::get('findUser', 'API\UserController@search');
Route::put('profile', 'API\UserController@updateProfile');

/*******ROTA APP VUE JS */


/*******ROTA APPMOBILE */

Route::post('login', 'API\Auth\AuthController@login');
Route::post('register', 'API\Auth\AuthController@register');
Route::apiResources(['services' => 'API\ServiceController']);

Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'API\Auth\AuthController@details');
Route::apiResources(['schedules' => 'API\ScheduleController']);
});

/*******ROTA APPMOBILE */

