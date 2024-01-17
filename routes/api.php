<?php

use App\Http\Controllers\api\CharactersController;
use App\Http\Controllers\api\WeaponsController;
use App\Http\Controllers\api\ArtifactsController;
use App\Http\Controllers\HomeController;
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

//Accueil API
Route::get('/',[HomeController::class,'index']);


//Personnages avec paramètres [Région, Type d'arme, Ascension, Rareté et Elément]
Route::get('/characters',[CharactersController::class,'getCharactersByParams']);

//Personnage selon le nom
Route::get('/character/{name}',[CharactersController::class,'getCharacterByName']);

//Armes avec paramètres [Type d'arme, Ascension, Rareté]
Route::get('/weapons',[WeaponsController::class,'getWeaponsByParams']);

//Arme selon le nom
Route::get('/weapon/{name}',[WeaponsController::class,'getWeaponByName']);

//Artéfacts avec paramètres [Stat]
Route::get('/artifacts',[ArtifactsController::class,'getArtifactsByStat']);

//Artéfacts selon le nom
Route::get('/artifact/{name}',[ArtifactsController::class,'getArtifactByName']);
