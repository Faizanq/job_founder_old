<?php

use Illuminate\Http\Request;

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


/*
* Language
*/
Route::apiResource('languages','API\Language\LanguageController',['only'=>['index']]);

Route::apiResource('reasons','API\Reason\ReasonController',['only'=>['index']]);













