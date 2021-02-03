<?php

use App\Http\Controllers\FunnyAPI;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('data', [FunnyAPI::class, 'getData']);
Route::post('add-guy', [FunnyAPI::class, 'addGuy']);
Route::put('update', [FunnyAPI::class, 'update']);

Route::get('hello', function () {
    return ["result" => "Hello World"];
});
