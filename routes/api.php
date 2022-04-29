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


Route::get("error", function(Request $request){
    return response()->json(["data"=>"error", "timestamp" => Carbon\Carbon::now()],500);
});


Route::get("success", function(Request $request){
    return response()->json(["data"=>"success", "timestamp" => Carbon\Carbon::now()],200);
});

Route::get("unable", function(Request $request){
    return response()->json(["data"=>"unavailable service", "timestamp" => Carbon\Carbon::now()],422);
});

Route::get("moved", function(Request $request){
    return response()->json(["data"=>"unavailable service", "timestamp" => Carbon\Carbon::now()],308);
});

Route::get("timeout", function(Request $request){
    sleep(60);
    return response()->json(["data"=>"timeout", "timestamp" => Carbon\Carbon::now()], 408);
});