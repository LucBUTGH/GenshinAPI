<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\CharacterModel;
use Illuminate\Http\Request;

class CharactersController extends Controller
{

    
    public function getCharactersByParams(Request $request)
    {
        // Récupérer tous les paramètres de la requête
        $params = $request->only(['area', 'rarity', 'weapon', 'element', 'ascension']);

        // Correspondance entre les clés de paramètres et les colonnes de la base de données
        $columnMappings = [
            'area' => 'cha_region',
            'rarity' => 'cha_rarity',
            'weapon' => 'cha_weapon_type',
            'element' => 'cha_element',
            'ascension' => 'cha_ascension_stat',
        ];

        // Construire la requête en fonction des paramètres fournis
        $query = CharacterModel::query();

        foreach ($params as $key => $value) {
            if ($value && isset($columnMappings[$key])) {
                $column = $columnMappings[$key];
                $query->where($column, $value);
            }
        }

        // Exécuter la requête
        $characters = $query->get();

        return response()->json([
            "message" => "Liste de personnages filtrée.",
            "characters" => $characters,
        ], 200);
    }


    //Get one character by segment
    public function getCharacterByName($name){
        $isCharacter = CharacterModel::where("cha_name",$name)->exists();
        $character = CharacterModel::where("cha_name",$name)->get();
        if($isCharacter){
            return response()->json([
                "message" => "Character found.",
                "character" => $character,
            ],200);
        }else{
            return response()->json([
                "message" => "Aucun personnage de nom " . $name . " trouvé",
            ]);
        }
    }
}
