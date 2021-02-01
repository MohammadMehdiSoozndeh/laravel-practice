<?php

use App\Http\Controllers\UserAuth;
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

Route::post("user", [UserAuth::class, 'userLogin']);

//Route::view("login", "login");

Route::view("profile", "profile");

Route::get("/login", function () {
    if (session()->has('user')) {
        return redirect('profile');
    }
    return redirect('login');
});

Route::get("/logout", function () {
    if (session()->has('user')) {
        session()->pull('user');
    }
    return redirect('login');
});

Route::fallback(function () {
    return "اشتباه زدی داداش";
});
