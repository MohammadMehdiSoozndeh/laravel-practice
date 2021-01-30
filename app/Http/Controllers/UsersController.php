<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    function index()
    {
        $fakeUsers = Http::get("https://reqres.in/api/users?page=1");
        return view('users', ['users' => $fakeUsers['data']]);
    }
}
