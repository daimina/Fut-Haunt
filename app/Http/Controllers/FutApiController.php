<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FutApiController extends Controller
{
    public function score(){
        $uri = 'https://api.football-data.org/v2/competitions/SA/scorers';
        $reqPrefs['http']['method'] = 'GET';
        $reqPrefs['http']['header'] = 'X-Auth-Token: 2a3feeab1ddc4b33855abf41d21623c3';
        $stream_context = stream_context_create($reqPrefs);
        $response = file_get_contents($uri, false, $stream_context);
        $data = json_decode($response, true);
        $data = $data["scorers"];
        // dd($data);
        return view("SERIE.score", ["data" => $data]);


    }
}
