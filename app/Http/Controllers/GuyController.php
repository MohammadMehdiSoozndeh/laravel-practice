<?php

namespace App\Http\Controllers;

use App\Models\Guy;
use Illuminate\Http\Request;

class GuyController extends Controller
{
    function fetchData()
    {
        return Guy::all();
    }
}
