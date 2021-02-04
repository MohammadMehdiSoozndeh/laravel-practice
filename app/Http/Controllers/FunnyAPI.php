<?php

namespace App\Http\Controllers;

use App\Models\Guy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    function delete($key)
    {
        $guy = Guy::find($key);
        if ($guy->delete())
            return ["Result" => "Successful"];
        else
            return ["Result" => "ERR"];
    }

    function search($name)
    {
        return Guy::where('name', 'like', "%" . $name . "%")->get();
    }

    function validateAdd(Request $request)
    {
        $rules = array('name' => 'required | string');
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
            return response()->json($validator->errors(), 401);
        else {
            $new = new Guy();
            $new->name = $request->get('name');
            $new->save();

            if ($new->save())
                return ["Result" => "Successful"];
            else
                return ["Result" => "ERR"];
        }
    }


}
