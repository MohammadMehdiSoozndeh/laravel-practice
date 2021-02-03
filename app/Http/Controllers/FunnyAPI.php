<?php

namespace App\Http\Controllers;

use App\Models\Guy;
use Illuminate\Http\Request;

class FunnyAPI extends Controller
{

    function getData(){
        return Guy::all();
    }

}
