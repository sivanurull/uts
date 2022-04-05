<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperApiControler extends Controller
{
    public function province(){
        $json=Http::get('https://api.rajaongkir.com/starter/province?key=a7d4a6e78ab2f9bd57428909f8306dfa')->json();
        return response()->json($json);
    }
    public function city(){
        $json=Http::get('https://api.rajaongkir.com/starter/city?key=a7d4a6e78ab2f9bd57428909f8306dfa')->json();
        return response()->json($json);
    }
    public function cost(){
        $json=Http::withBody(json_encode([
            "origin"=>'22',
            "destination" => '468',
            "weight" => '1000',
            "courier"=> 'jne']), 'application/x-www-form-urlencoded')
            ->post('https://api.rajaongkir.com/starter/cost?key=a7d4a6e78ab2f9bd57428909f8306dfa')->json();
        return response()->json($json);
    }
    public function ranked(){
        $json=Http::get('https://americas.api.riotgames.com/lor/ranked/v1/leaderboards?api_key=RGAPI-ff34d8c3-f6d9-4b36-8ab8-23fa02e1319f')->json();
        return response()->json($json);
    }
    public function status(){
        $json=Http::get('https://americas.api.riotgames.com/lor/status/v1/platform-data?api_key=RGAPI-ff34d8c3-f6d9-4b36-8ab8-23fa02e1319f')->json();
        return response()->json($json);
    }
    public function match($matchId){
        $json=Http::get('https://americas.api.riotgames.com/lor/match/v1/matches/'.$matchId.'?api_key=RGAPI-ff34d8c3-f6d9-4b36-8ab8-23fa02e1319f')->json();
        return response()->json($json);
    }
}
