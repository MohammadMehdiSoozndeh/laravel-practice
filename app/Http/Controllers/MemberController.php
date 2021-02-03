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
        $data = Guy::paginate(10);
        return view('addMember', ['items' => $data]);
    }

    function remove($id)
    {
        $data = Guy::find($id);
        $data->delete();
        return redirect('add');
    }

    function edit($id)
    {
        $data = Guy::find($id);
        return view('edit', ['data' => $data]);
    }

    function applyEdit(Request $request)
    {
        $data = Guy::find($request->id);
        $data->name = $request->name;
        $data->save();
        return redirect('add');
    }

    function view(Guy $i)
    {
        return $i;
    }


}
