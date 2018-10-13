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

/*
* Resons
*/
Route::apiResource('reasons','API\Reason\ReasonController',['only'=>['index']]);

/*
* Reports
*/
Route::apiResource('reports','API\Report\ReportController',['only'=>['index']]);

/*
* Category
*/
Route::apiResource('categories','API\Category\CategoryController',['only'=>['index']]);


/*
*  Position
*/
Route::apiResource('positions','API\Position\PositionController',['only'=>['index']]);













