<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/starter/province', [\App\Http\Controllers\WrapperApiControler::class,'province'])
    -> middleware(\App\Http\Middleware\NpmMiddelware::class)
    -> name ('province');
Route::get('/starter/city', [\App\Http\Controllers\WrapperApiControler::class,'city'])
    -> middleware(\App\Http\Middleware\NpmMiddelware::class)
    -> name ('city');
Route::post('/starter/cost', [\App\Http\Controllers\WrapperApiControler::class,'cost'])
    -> middleware(\App\Http\Middleware\NpmMiddelware::class)
    -> name ('cost');
Route::get('/lor/ranked/v1/leaderboards', [\App\Http\Controllers\WrapperApiControler::class,'ranked'])
    -> middleware(\App\Http\Middleware\NpmMiddelware::class)
    -> name ('ranked');
Route::get('/lor/status/v1/platform-data', [\App\Http\Controllers\WrapperApiControler::class,'status'])
    -> middleware(\App\Http\Middleware\NpmMiddelware::class)
    -> name ('status');
Route::get('/lor/match/v1/matches/{matchId}', [\App\Http\Controllers\WrapperApiControler::class,'match'])
    -> middleware(\App\Http\Middleware\NpmMiddelware::class)
    -> name ('match');
Route::get('/user/identitas', function(){
    return [
        'code'=>'0',
        'data'=>[
            'npm' => '197006031',
            'nama' => 'Siva Nurul Asvia',
            'email' => '197006031@student.unsil.ac.id'
        ]
        ];
});
