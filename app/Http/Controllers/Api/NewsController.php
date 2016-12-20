<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class NewsController extends Controller
{
    protected function init()
    {

        $nid = DB::table('user_resources')
            ->join('resources', 'user_resources.resource_id', '=', 'resources.id')
            ->where('user_id', Auth::user()->id)
            ->get();

        $nid = json_decode($nid, true);
        $body_url = 'https://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=30&scoring=h&q=';
        $data ="[";
        foreach ($nid as $key => $item) {
            $nurl = $body_url.$item['url'];
            $data .= $this->getCurl($nurl);
            $key==(count($nid)-1) ? $data .='' : $data .=',';
        }
        $data .="]";
        $data = json_decode($data);
        $data2[] = array();
        $count=0;
        foreach($data as $i => $veri){
            for($j=$count,$k=0;$j<count($veri->responseData->feed->entries)*($i+1);$j++,$k++){
                $data2[$j] =$veri->responseData->feed->entries[$k];
                $count++;
            }
        }
        return $data2;

    }

    public function yazarlar(){
            $body_url = 'https://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=30&scoring=h&q=';
        $url = $body_url.Input::get('url');
        $data = json_decode($this->getCurl($url));
        return $data->responseData->feed->entries;

    }

    public function getCurl($url)
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
