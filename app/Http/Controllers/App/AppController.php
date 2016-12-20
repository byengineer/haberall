<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Api\NewsController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{

    protected function init()
    {
        $data = DB::table('resources')->get();


        return view('app.dashboard', ['resources' => $data, 'AppController'=> new AppController()]);
    }

    public static function getYazar($url){
        $body_url = 'https://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=30&scoring=h&q=';
        $temp = '[';
        $url = $body_url.$url;
        $temp .= AppController::getCurl($url);
        $temp .= ']';
        $temp = json_decode($temp);
        return $temp;
    }

    public static function getCurl($url)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
        ));
        $resp = curl_exec($curl);
        curl_close($curl);
        return $resp;
    }
}
