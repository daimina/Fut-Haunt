<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FutApiController extends Controller
{
    public function score($league){
        // dd($league);
        switch ($league){
            case "PL":
                $uri = 'https://api.football-data.org/v2/competitions/PL/scorers';
                break;
            case "LALIGA":
                $uri = 'https://api.football-data.org/v2/competitions/PD/scorers';
                break;
            case "SERIE":
                $uri = 'https://api.football-data.org/v2/competitions/SA/scorers';
                break;
            case "BUNDES":
                $uri = 'https://api.football-data.org/v2/competitions/BL1/scorers';
                break;
        }
        
        $reqPrefs['http']['method'] = 'GET';
        $reqPrefs['http']['header'] = 'X-Auth-Token: 2a3feeab1ddc4b33855abf41d21623c3';
        $stream_context = stream_context_create($reqPrefs);
        $response = file_get_contents($uri, false, $stream_context);
        $data = json_decode($response, true);
        $data = $data["scorers"];
        // dd($data);
        return view($league.".score", ["data" => $data]);


    }

    public function rank($league){
        // dd($league);
        switch ($league){
            case "PL":
                $uri = 'https://api.football-data.org/v2/competitions/PL/standings';
                break;
            case "LALIGA":
                $uri = 'https://api.football-data.org/v2/competitions/PD/standings';
                break;
            case "SERIE":
                $uri = 'https://api.football-data.org/v2/competitions/SA/standings';
                break;
            case "BUNDES":
                $uri = 'https://api.football-data.org/v2/competitions/BL1/standings';
                break;
        }
        
        $reqPrefs['http']['method'] = 'GET';
        $reqPrefs['http']['header'] = 'X-Auth-Token: 2a3feeab1ddc4b33855abf41d21623c3';
        $stream_context = stream_context_create($reqPrefs);
        $response = file_get_contents($uri, false, $stream_context);
        $data = json_decode($response, true);
        $data = $data["standings"][0]["table"];
        // dd($data);
        return view($league.".rank", ["data" => $data]);


    }
}
