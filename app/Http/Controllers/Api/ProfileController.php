<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        $items = User::where("id",Auth::user()->id)-> get();
        $response = [
            'data' => $items
        ];
        return response()->json($response);
    }


    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
        ]);
        $edit = User::find($id)->update($request->all());
        return response()->json($edit);

    }


    public function destroy($id)
    {
        //
    }
}
