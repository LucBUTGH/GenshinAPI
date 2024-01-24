<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CharacterModel;
use App\Http\Controllers\AuthController;

class HomeController extends Controller
{
    public function index(){
        return response()->json([
            "message" => "Welcome to Genshin API.",
        ],200);
    }

    function getAllCharacters(){
        $auth = new AuthController();
        $auth->redirectHome();
    }

    function pageCharacters(){
        $characters = CharacterModel::get();
        return view('characters', ['characters' => $characters]);
    }

    function pageOnlyCharacter($name){
        $character = CharacterModel::where('cha_name',$name)->first();
        return view('character',['character' => $character]);
    }
}





