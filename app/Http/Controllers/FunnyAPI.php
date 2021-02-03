<?php

namespace App\Http\Controllers;

use App\Models\Guy;
use Illuminate\Http\Request;

class FunnyAPI extends Controller
{

    function getData()
    {
        return Guy::all();
    }

    function addGuy(Request $request)
    {
        $guy = new Guy();
        $guy->name = $request->get('name');

        if ($guy->save())
            return ["Result" => "Data has been saved"];
        else
            return ["Result" => "ERR: Data has not been saved"];
    }

    function update(Request $request)
    {
        $guy = Guy::find($request->id);
        $guy->name = $request->name;

        if ($guy->save())
            return ["Result" => "Successful"];
        else
            return ["Result" => "ERR"];
    }
}
