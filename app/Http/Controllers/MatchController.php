<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MatchController extends Controller
{
    public function index(Request $request)
    {
        $dateFrom = $request->input('dateFrom');
        $dateTo = $request->input('dateTo');
        $matches = HTTP::withHeaders([
            'X-Auth-Token' => '31e07e8b9b1d4028bba39dde53ea79c2'
        ])->get('http://api.football-data.org/v4/competitions/PL/matches', [
            'dateFrom' => $dateFrom,
            'dateTo' => $dateTo
        ]);
        $matchesArray = $matches->json();
        $matchesArrayMathches = $matchesArray["matches"];

        
        //dd($dateFrom." **** ".$dateTo);
        //$dateFrom = '2022-05-01';
        //$dateTo = '2022-05-31';


        //$home=["equipo"=>"manchester","equipo1"=>"liverpoll"];
        //$arreglo=["equipo"=>"manchester","equipo1"=>"liverpoll"];
        $liga=["name"=>"PREMIER LEAGUE","flag"=>$matchesArrayMathches[0]["area"]["flag"]];
        return view('matchList', compact('liga', 'matchesArrayMathches', 'dateFrom', 'dateTo'));
    }

    public function consultar(){
        return view('matchForm');
    }
}
