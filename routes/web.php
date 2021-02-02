<?php

use App\Http\Controllers\MemberController;
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

Route::fallback(function () {
    return "اشتباه زدی داداش";
});
