<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Validator;

class GetResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('resources')->get();
        $user_id = array("user_id"=>Auth::user()->id);

        $response = [
            'data' => $items,
            'user_id' => Auth::user()->id
        ];

        return response()->json($response);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->json("true");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'resource_id' => 'unique:user_resources'
        ]);

        if ($validator->fails()) {
            $data = array('type'=>'error','message' => 'Zaten Eklenmiş');
            return response()->json($data);
        }else{
            $insert = DB::table('user_resources')->insert(
                ['user_id' => Auth::user()->id, 'resource_id'=>Input::get('resource_id')]
            );
            if ($insert){
                $data = array('type'=>'success','message' => 'Kayıt Başarıyla Eklendi');
                return response()->json($data);
            }
            else{
                $data = array('type'=>'error','message' => 'Bir Hata Oluştu');
                return response()->json($data);
            }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
