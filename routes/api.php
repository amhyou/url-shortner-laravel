<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Link;
use Hashids\Hashids;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/newurl', function (Request $request) {
    $jsonData = $request->json()->all();
    $href = Link::where('href', $jsonData['href'])->first();
    if($href){
        return [
            "result" => $href->short
        ];
    }
    $lastElementId = Link::max('id');
    if(!$lastElementId){
        $lastElementId = 5236479;
    }else{
        $lastElementId = $lastElementId + 5236479;
    }
    $hashids = new Hashids('shortener');
    $href = Link::create([
        'href' => $jsonData['href'],
        'short' => $hashids->encode($lastElementId),
        'nb_hits' => 0,
    ]);
    return [
        "result" => $href->short
    ];
});