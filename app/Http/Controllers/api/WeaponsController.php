<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\WeaponsModel;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;



class WeaponsController extends Controller
{

    /**
     * Get characters based on specified parameters.
     *
     * @OA\Get(
     *     path="/api/weapons",
     *     summary="Get weapons based on parameters",
     *     tags={"Weapons"},
     *     @OA\Parameter(
     *         name="type",
     *         in="query",
     *         description="The type of the weapon.",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="rarity",
     *         in="query",
     *         description="The rarity of the weapon.",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="ascension",
     *         in="query",
     *         description="The ascension of the weapon.",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="List of weapons filtered.",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="List of weapons filtered."),
     *             @OA\Property(property="weapons", type="array", @OA\Items(type="object")),
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="No weapons found with the provided parameters.",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="No weapons found with the provided parameters."),
     *         )
     *     )
     * )
     */
    
    public function getWeaponsByParams(Request $request)
    {
        try{
            // Getting params
            $params = $request->only(['type', 'rarity', 'ascension']);

            // Mapping between parameter keys and database columns
            $columnMappings = [
                'type' => 'wea_weapon_type',
                'rarity' => 'wea_rarity',
                'ascension' => 'wea_ascension',
            ];

            // Building the query agreeing provided params
            $query = WeaponsModel::query();

            foreach ($params as $key => $value) {
                if ($value && isset($columnMappings[$key])) {
                    $column = $columnMappings[$key];
                    $query->where($column, $value);
                }
            }

            // Running the query
            $weapons = $query->get();

            if ($weapons->isEmpty()) {
                return response()->json([
                    "message" => "No characters found with the provided parameters.",
                ], 404);
            }

            return response()->json([
                "message" => "Characters filtered successfully.",
                "characters" => $weapons,
            ], 200);

        //Exception if unable to log into database
        }catch(QueryException){
            return response()->json([
                "message" => "Database not connected",
                "error" => $e->getMessage(), 
            ]);
        }
        
    }


    /**
     * Get a weapon by name.
     *
     * @OA\Get(
     *     path="/api/weapon/{name}",
     *     summary="Get a weapon by name",
     *     tags={"Weapons"},
     *     @OA\Parameter(
     *         name="name",
     *         in="path",
     *         description="The name of the weapon.",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Weapon found.",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="Weapon found."),
     *             @OA\Property(property="weapon", type="object"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="No weapon found with the provided name.",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="No weapon found with the provided name."),
     *         )
     *     )
     * )
     */
    public function getWeaponByName($name)
    {

        try{
            $isWeapon = WeaponsModel::where("wea_name", $name)->exists();
            $weapon = WeaponsModel::where("wea_name", $name)->get();
    
            if ($isWeapon) {
                return response()->json([
                    "message" => "Weapon found.",
                    "character" => $weapon,
                ], 200);
            } else {
                return response()->json([
                    "message" => "$name doesn't exist.",
                ], 404);
            }   
        }catch(QueryException){
            return response()->json([
                "message" => "Database not connected.",
                "error" => $e->getMessage(), 
            ], 404);
        }
        
    }

}
