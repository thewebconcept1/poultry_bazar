<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\Media;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    // get media
    public function getMedia($type = null)
    {
        if ($type == 'blogs') {
            $media = Media::with('category')->where('media_type', $type)->where('media_status', 1)->get();
        }elseif ($type == 'diseases') {
            $media = Media::with('category')->where('media_type', $type)->where('media_status', 1)->get();
        }elseif ($type == 'consultancy') {
            $media = Media::with('category')->where('media_type', $type)->where('media_status', 1)->get();
        }else{
            return response()->json(['success' => false, 'message' => 'Please select type']);
        }

        if ($media->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'No media found.',
                'data' => [],
            ], 404);
        }

        return response()->json(['success' => true, 'data' => $media], 200);

    }
    // get media

    // get market rates
    public function getMarketRates(Request $request)
    {
        try {
            // Validate the incoming request
            $validatedData = $request->validate([
                'market_ids' => 'required|array', // Expecting an array of market IDs
            ]);

            // Retrieve the markets based on the provided IDs
            $markets = Market::whereIn('market_id', $validatedData['market_ids'])->get();

            // Check if markets were found
            if ($markets->isEmpty()) {
                return response()->json([
                    'success' => false,
                    'message' => 'No markets found for the provided IDs.',
                    'data' => [],
                ], 404);
            }

            // Return the markets as a JSON response
            return response()->json([
                'success' => true,
                'data' => $markets,
            ], 200);
        } catch (\Exception $e) {
            // Handle exceptions (e.g., validation errors)
            return $this->errorResponse($e);
        }
    }
    // get market rates

    // get markets
    public function getMarkets()
    {
        $markets = Market::select('market_id', 'market_name')->where('market_status', 1)->get();

        return response()->json(['success' => true, 'markets' => $markets], 200);
    }
    // get markets
}
