<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function loadView()
    {
        echo "This is UsersController extends Controller.";
//        return DB::select("select * form users");
        return view("home");
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
