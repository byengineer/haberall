<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
            'email' => 'required|email',
        ]);
        $edit = User::find($id)->update($request->all());
        if($edit)
            return Redirect::back()->with('success','Profil Resminiz Başarıyla Değiştirildi.');
        else
            return Redirect::back()->with('errors','Hata Oluştu');


    }


    public function destroy($id)
    {
        //
    }
}
