<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperApiControler extends Controller
{
    public function province(){
        $json=Http::get('https://api.rajaongkir.com/starter/province?key=500f65280d54e83dc91430d8b49090a3')->json();
        return response()->json($json);
    }
    public function city(){
        $json=Http::get('https://api.rajaongkir.com/starter/city?key=500f65280d54e83dc91430d8b49090a3')->json();
        return response()->json($json);
    }
    public function cost(){
        $json=Http::withBody(json_encode([
            "origin"=>'22',
            "destination" => '468',
            "weight" => '1000',
            "courier"=> 'jne']), 'application/x-www-form-urlencoded')
            ->post('https://api.rajaongkir.com/starter/cost?key=500f65280d54e83dc91430d8b49090a3')->json();
        return response()->json($json);
    }
    public function ranked(){
        $json=Http::get('https://americas.api.riotgames.com/lor/ranked/v1/leaderboards?api_key=RGAPI-6079620c-5336-43d7-ab32-8e8d9f6f238c')->json();
        return response()->json($json);
    }
    public function status(){
        $json=Http::get('https://americas.api.riotgames.com/lor/status/v1/platform-data?api_key=RGAPI-6079620c-5336-43d7-ab32-8e8d9f6f238c')->json();
        return response()->json($json);
    }
    public function match($matchId){
        $json=Http::get('https://americas.api.riotgames.com/lor/match/v1/matches/'.$matchId.'?api_key=RGAPI-6079620c-5336-43d7-ab32-8e8d9f6f238c')->json();
        return response()->json($json);
    }
}
