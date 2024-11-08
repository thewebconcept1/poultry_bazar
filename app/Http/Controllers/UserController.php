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
    // // user Defined
    // protected function errorResponse(Exception $e, $code = 400): JsonResponse
    // {
    //     return response()->json([
    //         'success' => false,
    //         'message' => $e->getMessage(),
    //     ], $code);
    // }
    // // user Defined

    // update user status
    public function updateUserStatus(Request $request)
    {
        try {

            $validatedData = $request->validate([
                'user_id' => 'required',
                'user_status' => 'required',
            ]);

            $user = User::where('id', $validatedData['user_id'])->first();

            $user->user_status = $validatedData['user_status'];
            if ($user->user_verified == 0) {
                $user->user_verified = 1;
            }
            $user->save();

            if ($validatedData['user_status'] == 1) {
                return response()->json(['success' => true, 'message' => 'User activated successfully'], 200);
            } elseif ($validatedData['user_status'] == 0) {
                return response()->json(['success' => true, 'message' => 'User deactivated successfully'], 200);
            }
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
    // update user status

    // get user
    public function getUser($id = null)
    {

        $loggedInUser = session('user_details');

        if ($id != null) {
            $user = User::where('user_id', $id)->first();

            if (!$user) {
                return response()->json(['success' => false, 'message' => 'User not found'], 404);
            }

            return view('priveleges', ['user' => $user]);
        } else {
            $user = User::where('id', '<>', $loggedInUser['id'])->where('user_role', 'operator')->get();

            return view('operators', ['users' => $user]);
        }
    }
    // get user

    // verify User and give privileges
    public function addUserPrivileges(Request $request)
    {
        try {

            $validatedData = $request->validate([
                'userId' => 'required',
                'userPrivileges' => 'nullable',
            ]);

            $user = User::where('id', $validatedData['userId'])->first();

            if (!$user) {
                return response()->json(['success' => false, 'message' => 'User not found'], 404);
            }

            $user->user_privileges = json_encode($validatedData['userPrivileges']);
            if ($user->user_verified == 0) {
                $user->user_status = 1;
                $user->user_verified = 1;
            }
            $user->save();

            return response()->json(['success' => true, 'message' => 'User verified and activated'], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
    // verify User and give privileges

    // Request for service
    public function RequestForService(Request $request)
    {
        try {

            $validatedData = $request->validate([
                'fullName' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'password' => 'required',
                'module_id' => 'required|array',
                'module_id.*' => 'integer',
            ]);

            $moduleIds = implode(',', $validatedData['module_id']);

            $existingRequest = User::where('email', $validatedData['email'])->where('user_verified', 0)->first();
            $existingUser = User::where('email', $validatedData['email'])->where('user_verified', 1)->first();

            if ($existingRequest) {
                return response()->json(['success' => false, 'message' => 'Request already sent'], 400);
            } elseif ($existingUser) {
                return response()->json(['success' => false, 'message' => 'User already exist'], 400);
            }

            $requestedUser = User::create([
                'name' => $validatedData['fullName'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'password' => $validatedData['password'],
                'module_id' => $moduleIds,
                'user_role' => 'operator',
            ]);

            return response()->json(['success' => true, 'message' => 'Request Sent'], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
    // Request for service

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
                    'city_name' => $user->city->city_name ?? null,
                    'city_province' => $user->city->city_province ?? null,
                    'user_privileges' => $user->user_privileges ?? null,
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

    public function logout(Request $request)
    {
        $request->session()->forget('user_details');
        $request->session()->regenerate();

        return redirect('/login');
    }

    // get user privileges for view page

    public function getPriveleges($id)
    {
        $user_id = $id;
        $userPrivileges = User::select('user_privileges')->where('id', $user_id)->first();
        $privileges = json_decode($userPrivileges->user_privileges, true); // First decode
        return view('priveleges', compact('privileges', 'user_id'));
    }
}
