<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\CharacterModel;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;



class CharactersController extends Controller
{

    /**
     * Get characters based on specified parameters.
     *
     * @OA\Get(
     *     path="/api/characters",
     *     summary="Get characters based on parameters",
     *     tags={"Characters"},
     *     @OA\Parameter(
     *         name="area",
     *         in="query",
     *         description="The area of the character.",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="rarity",
     *         in="query",
     *         description="The rarity of the character.",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="weapon",
     *         in="query",
     *         description="The weapon type of the character.",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="element",
     *         in="query",
     *         description="The element of the character.",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="ascension",
     *         in="query",
     *         description="The ascension stat of the character.",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="List of characters filtered.",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="Liste de personnages filtrée."),
     *             @OA\Property(property="characters", type="array", @OA\Items(type="object")),
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="No characters found with the provided parameters.",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="No characters found with the provided parameters."),
     *         )
     *     )
     * )
     */
    
    public function getCharactersByParams(Request $request)
    {
        try{
            // Getting params
            $params = $request->only(['area', 'rarity', 'weapon', 'element', 'ascension']);

            // Mapping between parameter keys and database columns
            $columnMappings = [
                'area' => 'cha_region',
                'rarity' => 'cha_rarity',
                'weapon' => 'cha_weapon_type',
                'element' => 'cha_element',
                'ascension' => 'cha_ascension_stat',
            ];

            // Building the query agreeing provided params
            $query = CharacterModel::query();

            foreach ($params as $key => $value) {
                if ($value && isset($columnMappings[$key])) {
                    $column = $columnMappings[$key];
                    $query->where($column, $value);
                }
            }

            // Running the query
            $characters = $query->get();

            if ($characters->isEmpty()) {
                return response()->json([
                    "message" => "No characters found with the provided parameters.",
                ], 404);
            }

            return response()->json([
                "message" => "Characters filtered successfully.",
                "characters" => $characters,
            ], 200);

        //Exception if unable to log into database
        }catch(QueryException $e){
            return response()->json([
                "message" => "Database not connected",
                "error" => $e->getMessage(), 

            ]);
        }
        
    }


    /**
     * Get a character by name.
     *
     * @OA\Get(
     *     path="/api/character/{name}",
     *     summary="Get a character by name",
     *     tags={"Characters"},
     *     @OA\Parameter(
     *         name="name",
     *         in="path",
     *         description="The name of the character.",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Character found.",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="Character found."),
     *             @OA\Property(property="character", type="object"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="No character found with the provided name.",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="No character found with the provided name."),
     *         )
     *     )
     * )
     */
    public function getCharacterByName($name)
    {

        try{
            $isCharacter = CharacterModel::where("cha_name", $name)->exists();
            $character = CharacterModel::where("cha_name", $name)->get();
    
            if ($isCharacter) {
                return response()->json([
                    "message" => "Character found.",
                    "character" => $character,
                ], 200);
            } else {
                return response()->json([
                    "message" => "$name doesn't exist.",
                ], 404);
            }   
        }catch(QueryException $e){
            return response()->json([
                "message" => "Database not connected.",
                "error" => $e->getMessage(),
            ], 404);
        }
        
    }

    

}
