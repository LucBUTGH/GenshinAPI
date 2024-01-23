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
}





