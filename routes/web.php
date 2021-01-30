<?php

use App\Http\Controllers\UsersController;
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

Route::get("/", function () {
    return redirect('/login');
});

Route::post("users", [UsersController::class, 'getData']);
Route::view("login", "users");
Route::view("home", "home");

Route::group(['middleware' => ['protectedPages']], function () {
    Route::view("users",'users');
    Route::view("login", "users");
});

Route::View("noaccess", "noaccess");


