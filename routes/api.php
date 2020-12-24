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
Route::apiResource('monan','Api\mon_anController')->only(['index']);
Route::apiResource('loaimon','Api\loai_monController')->only(['index']);
Route::apiResource('ban','Api\banController')->only(['index']);