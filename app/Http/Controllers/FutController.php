<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PL;
use App\Models\Laliga;
use App\Models\Bundes;
use App\Models\Serie;

class FutController extends Controller
{
    public function index(){
        return view("index");
    }

    public function PL(){
        #データの取得
        $data = PL::all();
        // var_dump ($data);
        return view("PL.pl", ["data" => $data]);
    }

    public function liga(){
        $data = Laliga::all();
        return view("LALIGA.laliga", ["data" => $data]);
    }

    public function serie(){
        $data = Serie::all();
        return view("SERIE.serie", ["data" => $data]);
    }

    public function bundes(){
        $data = Bundes::all();
        return view("BUNDES.bundes", ["data" => $data]);
    }

    public function create(Request $request){
        #URLを取得
        $url = $request->path();
        $league = explode("/", $url);
        #リーグ名
        $league = $league[0];
        
        #投稿データの保存
        $params = $request->validate([
            'name'=>'required|max:20',
            'text'=>'required|max:140',
        ]);

        // dd($params);
        
        switch ($league){
            case "PL":
                PL::create($params);
                break;
            case "laliga":
                Laliga::create($params);
                break;
            case "bundes":
                Bundes::create($params);
                break;
            case "serie":
                Serie::create($params);
                break;
        }

        return redirect()->route("Fut.".$league);
    }
}
