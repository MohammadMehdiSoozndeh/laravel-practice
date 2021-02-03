<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class QueryBuilderFun extends Controller
{
    function query()
    {
        return DB::table('guys')
            ->count();
    }

    function memberAggregateMethods()
    {
//        return DB::table('guys')->avg('id');
//        return DB::table('guys')->sum('id');
//        return DB::table('guys')->max('id');
//        return DB::table('guys')->min('id');
        return DB::table('guys')->min('name');
    }
}
