<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\searchDiaristCep;

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

// as rotas apis são lidas como localhost/api

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/diaristas-cidade', searchDiaristCep::class);



