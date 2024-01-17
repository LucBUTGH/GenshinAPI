<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\ArtifactsModel;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;


class ArtifactsController extends Controller
{
    /**
     * Get characters based on specified parameters.
     *
     * @OA\Get(
     *     path="/api/artifacts",
     *     summary="Get characters based on parameters",
     *     tags={"Artifacts"},
     *     @OA\Parameter(
     *         name="stat",
     *         in="query",
     *         description="The stat of the set artifacts.",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="List of artifacts filtered.",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="List of artifacts filtered."),
     *             @OA\Property(property="artifacts", type="array", @OA\Items(type="object")),
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="No artifacts found with the provided parameters.",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="No artifacts found with the provided parameters."),
     *         )
     *     )
     * )
     */
    function getArtifactsByStat(Request $request){
        try{
            $params = $request->only(["stat"]);

            $columnMappings = [
                'stat' => 'art_stat',
            ];

            $query = ArtifactsModel::query();

            foreach ($params as $key => $value) {
                if ($value && isset($columnMappings[$key])) {
                    $column = $columnMappings[$key];
                    $query->where($column, $value);
                }
            }

            $artifacts = $query->get();

            if ($artifacts->isEmpty()) {
                return response()->json([
                    "message" => "No artifacts found with the provided parameters.",
                ], 404);
            }

            return response()->json([
                "message" => "Artifacts found successfully",
                "artifacts" => $artifacts,
            ],200);

        }catch(QueryException $e){
            return response()->json([
                "message" => "Database not connected",
                "error" => $e->getMessage(), 
            ], 404);
        }
    }

    /**
     * Get a artifact by name.
     *
     * @OA\Get(
     *     path="/api/artifact/{name}",
     *     summary="Get an artifact by name",
     *     tags={"Artifacts"},
     *     @OA\Parameter(
     *         name="name",
     *         in="path",
     *         description="The name of the artifact.",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Artifact found.",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="Artifact found."),
     *             @OA\Property(property="artifact", type="object"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="No artifact found with the provided name.",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="No artifact found with the provided name."),
     *         )
     *     )
     * )
     */
    function getArtifactByName($name){
        try{
            $isArtifact = ArtifactsModel::where("art_name_set", $name)->exists();
            $artifact = ArtifactsModel::where("art_name_set", $name)->get();
    
            if ($isArtifact) {
                return response()->json([
                    "message" => "Character found.",
                    "character" => $artifact,
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
