<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\Market;
use App\Models\Media;
use App\Models\Queries;
use App\Models\User;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    // get Notifications
    // public function getNotifications()
    // {
    //     $notifications = Queries::get();
    // }
    // get Notifications

    // get FAQs
    public function getFAQs()
    {
        $FAQs = FAQ::get();

        return response()->json(['success' => true, 'data' => $FAQs], 200);

    }
    // get FAQs

    // update User
    public function updateUser(Request $request)
    {
        try {
            $loggedInUser = Auth::user();

            $validatedData = $request->validate([
                'name' => 'nullable|string|max:255',
                'email' => 'nullable|email',
                'address' => 'nullable|string|max:500',
                'password' => 'nullable|string|min:8',
            ]);

            $user = User::where('id', $loggedInUser->id)->first();

            if ($request->hasFile('user_image')) {
                // Get the path of the image from the animal record
                $imagePath = public_path($user->user_image); // Get the full image path
                if (!empty($user->user_image) && file_exists($imagePath) && is_file($imagePath)) {
                    unlink($imagePath); // Safely delete the old image
                }
                $image = $request->file('user_image');
                // Store the image in the 'animal_images' folder and get the file path
                $imagePath = $image->store('user_images', 'public'); // stored in 'storage/app/public/animal_images'
                $imageFullPath = 'storage/' . $imagePath;
                $user->user_image = $imageFullPath;
            }

            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->address = $validatedData['address'];
            $user->password = hash::make($validatedData['password']);
            $user->save();

            return response()->json(['success' => true, 'message' => 'User updated'], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
    // update User

    // get User
    public function getUser()
    {
        $user = Auth::user();

        return response()->json(['success' => true, 'data' => $user], 200);

    }
    // get User
    // login
    public function login(Request $request)
    {
        try {
            $email = $request->input('email');
            $password = $request->input('password');
            $user = User::where('email', $email)->first();

            if (!$user || !Hash::check($password, $user->password) && $user->user_role != 'appuser') {
                return response()->json(['success' => false, 'message' => 'Invalid credentials'], 401);
            }

            // Generate a personal access token for the user
            $token = $user->createToken('api-token')->plainTextToken;

            return response()->json(['success' => true, 'message' => 'Login successful!', 'token' => $token, 'user_details' => $user], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }
    // login

    // register
    public function register(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'address' => 'required|string|max:500',
                'password' => 'required|string|min:8',
            ]);

            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'address' => $validatedData['address'],
                'password' => $validatedData['password'],
                'user_role' => 'appuser',
                'user_status' => 1,
            ]);

            return response()->json(['success' => true, 'message' => 'Registration successfull'], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
    // register

    // add query
    public function addQuery(Request $request)
    {
        try {
            $user = Auth::user();
            $validatedData = $request->validate([
                'query_subject' => 'required',
                'query_message' => 'required',
            ]);

            $query = Queries::create([
                'added_user_id' => $user->id,
                'query_subject' => $validatedData['query_subject'],
                'query_message' => $validatedData['query_message'],
            ]);

            return response()->json(['success' => true, 'message' => 'Query has been sent to our team. You will get the notification soon.'], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
    // add query

    // get media
    public function getMedia($type = null)
    {
        if ($type == 'blogs') {
            $media = Media::with('category:category_id,category_name')->where('media_type', $type)->where('media_status', 1)->get();
        } elseif ($type == 'diseases') {
            $media = Media::with('category:category_id,category_name')->where('media_type', $type)->where('media_status', 1)->get();
        } elseif ($type == 'consultancy') {
            $media = Media::with('category:category_id,category_name')->where('media_type', $type)->where('media_status', 1)->get();
        } else {
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
                'market_ids' => 'nullable|array', // Allow market_ids to be nullable
            ]);

            // Retrieve the markets based on the provided IDs or fetch all markets if IDs are null
            $markets = isset($validatedData['market_ids']) && !empty($validatedData['market_ids'])
                ? Market::whereIn('market_id', $validatedData['market_ids'])->where('market_status', 1)->get()
                : Market::where('market_status', 1)->limit(4)->get();

            // Check if markets were found
            if ($markets->isEmpty()) {
                return response()->json([
                    'success' => false,
                    'message' => 'No markets found.',
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
