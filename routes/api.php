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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

/*LOGIN/LOGOUT/REGISTER*/

Route::post('/login','AuthController@login');
Route::get('/logout','AuthController@logout')->middleware('auth:api');
Route::post('/register', 'AuthController@register');

/*LOGIN/LOGOUT/REGISTER*/

Route::middleware(('auth:api'))->group(function () {
    Route::get('/users/{id}/friends', 'HomeController@getFriends')->where('id', "[0-9]+");
});