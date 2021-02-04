<?php

use App\Http\Controllers\FunnyAPI;
use App\Http\Controllers\GuyController;
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

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::apiResource("guy", GuyController::class);

    Route::get('', function () {
        return "We're good to go";
    });

    Route::get('data', [FunnyAPI::class, 'getData']);
    Route::post('add-guy', [FunnyAPI::class, 'addGuy']);
    Route::put('update', [FunnyAPI::class, 'update']);
    Route::delete('delete/{key}', [FunnyAPI::class, 'delete']);
    Route::get('search/{name}', [FunnyAPI::class, 'search']);
    Route::post('valid-add', [FunnyAPI::class, 'validateAdd']);

    Route::get('hello', function () {
        return ["result" => "Hello World"];
    });
});

Route::post('/upload', [\App\Http\Controllers\FileController::class, 'upload']);

Route::post('login', [\App\Http\Controllers\UserController::class, 'index']);
