<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\JsonResponse;

abstract class Controller
{
    // user Defined
    protected function errorResponse(Exception $e, $code = 400): JsonResponse
    {
        return response()->json([
            'success' => false,
            'message' => $e->getMessage(),
        ], $code);
    }
    // user Defined
}
