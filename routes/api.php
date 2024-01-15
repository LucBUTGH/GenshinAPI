<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CharactersController;

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

//Accueil tavu
Route::get('/',[HomeController::class,'index']);


//Les personnages
Route::get('/characters',[CharactersController::class,'getCharactersByParams']);

//Un personnage selon le nom
Route::get('character/{name}',[CharactersController::class,'getCharacterByName']);

//Personnages selon la région
Route::get('character/{area}',[CharactersController::class,'getCharacterByArea']);




