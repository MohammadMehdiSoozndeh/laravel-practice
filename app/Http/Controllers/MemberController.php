<?php

namespace App\Http\Controllers;

use App\Models\Guy;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function addName(Request $request)
    {
        $member = new Guy();
        $member->name = $request->name;
        $member->save();


        return redirect('add');
    }

    function show()
    {
        $data = Guy::paginate(5);
        return view('addMember', ['items' => $data]);
    }


}