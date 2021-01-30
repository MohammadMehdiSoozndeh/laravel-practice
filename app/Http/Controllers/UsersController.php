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
        $request->validate([
            'username' => 'required | min : 3 | max : 10',
            'userPassword' => 'required | min : 8 '
        ]);
        return $request->input();
    }
}
