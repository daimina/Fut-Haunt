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
        // dd($data);
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

    public function edit($league, $datum_id){
        // dd($datum_id);
        switch ($league){
            case "PL":
                $datum = PL::findOrFail($datum_id);
                // dd($datum);
                break;
            case "laliga":
                $datum = Laliga::findOrFail($datum_id);
                break;
            case "bundes":
                $datum = Bundes::findOrFail($datum_id);
                break;
            case "serie":
                $datum = Serie::findOrFail($datum_id);
                break;
        }

        return view("edit", ["league"=>$league, "datum"=>$datum]);
    }

    public function update($league, $datum_id, Request $request){
        // dd($datum_id);
        $params = $request->validate([
            'name'=>'required|max:20',
            'text'=>'required|max:140'
        ]);    

        switch ($league){
            case "PL":
                $datum = PL::findOrFail($datum_id);
                // dd($datum);
                break;
            case "laliga":
                $datum = Laliga::findOrFail($datum_id);
                break;
            case "bundes":
                $datum = Bundes::findOrFail($datum_id);
                break;
            case "serie":
                $datum = Serie::findOrFail($datum_id);
                break;
        }

        $datum->fill($params)->save();
        return redirect()->route('Fut.'.$league);
    }

    public function delete($league, $datum_id){
        switch ($league){
            case "PL":
                $datum = PL::findOrFail($datum_id);
                // dd($datum);
                break;
            case "laliga":
                $datum = Laliga::findOrFail($datum_id);
                break;
            case "bundes":
                $datum = Bundes::findOrFail($datum_id);
                break;
            case "serie":
                $datum = Serie::findOrFail($datum_id);
                break;
        }

        \DB::transaction(function() use ($datum){
            $datum->delete();
        });

        return redirect()->route('Fut.'.$league);
    }
}
