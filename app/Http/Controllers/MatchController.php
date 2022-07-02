<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MatchController extends Controller
{
    public function index()
    {
        $matches = HTTP::withHeaders([
            'X-Auth-Token' => '31e07e8b9b1d4028bba39dde53ea79c2'
        ])->get('http://api.football-data.org/v4/competitions/PL/matches', [
            'dateFrom' => '2022-05-01',
            'dateTo' => '2022-05-31'
        ]);
        $matchesArray = $matches->json();
        $matchesArrayMathches = $matchesArray["matches"];
        $arreglo =["equpipo"=>"machester","equpipo1"=>"liverpoll"];
        $liga="PREMIER LEAGUE";
        return view('matchList', compact('arreglo','liga'));
    }

    public function prueba(){
        return view('matchList');
    }
}
