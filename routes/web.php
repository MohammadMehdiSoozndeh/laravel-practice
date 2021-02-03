<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\QueryBuilderFun;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/fun/{str}', function ($str) {
    return $str;
});

Route::post('add', [MemberController::class, 'addName']);
Route::get('add', [MemberController::class, 'show']);
Route::get('delete/{id}', [MemberController::class, 'remove']);
Route::get('edit/{id}', [MemberController::class, 'edit']);
Route::post('edit/', [MemberController::class, 'applyEdit']);

Route::get('view/{i}', [MemberController::class, 'view']);
Route::get('view/name/{i:name}', [MemberController::class, 'view']);

Route::get('/query', [QueryBuilderFun::class, 'memberAggregateMethods']);

Route::fallback(function () {
    return "اشتباه زدی داداش";
});
