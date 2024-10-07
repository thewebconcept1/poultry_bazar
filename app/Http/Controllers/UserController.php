<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
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

    public function login(Request $request)
    {
        try {

            $email = $request->input('email');
            $token = Str::random(60);
            $password = $request->input('password');
            $user = User::with(
                'city:city_name,city_province'
            )
            ->where('email', $email)->first();

            if ($user && Hash::check($password, $user->password)) {
                // Create a session for the user
                session(['user_details' => [
                    'token' => $token, // Set token value if needed
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'user_role' => $user->user_role,
                    'city_id' => $user->city_id,
                    'city_name' => $user->city->city_name,
                    'city_province' => $user->city->city_province,
                ]]);

                return response()->json(['success' => true, 'message' => 'Login successful', 'user_details' => session('user_details')]);
            } else {
                // Authentication failed
                return response()->json(['success' => false, 'message' => 'Invalid credentials'], 401);
            }

        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
}
