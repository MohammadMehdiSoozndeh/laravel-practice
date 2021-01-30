<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function loadView()
    {
        return view("users");
    }

    public function getData(Request $request)
    {
        return $request->input();
    }
}
