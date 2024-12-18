<?php

namespace App\Http\Controllers\Flock;

use App\Http\Controllers\Controller;
use App\Models\Flock\Flock;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FlockUserController extends Controller
{
    public function insertUser(Request $request)
    {

        try {
            $userId = Auth::user()->id;
            $validatedData = $request->validate([
                'flock_id' => 'required',
                'role' => 'required|in:fl_supervisor,fl_accountant,fl_assistant',
                'name' => 'required',
                'email' => 'required',
                'phone' => 'nullable',
                'address' => 'nullable',
                'image' => 'nullable|image',
            ]);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagePath = $image->store('user_images', 'public');
                $imageFullPath = 'storage/' . $imagePath;
            } else {
                $imageFullPath = null;
            }
            $flock = Flock::find($validatedData['flock_id']);
            if (!$flock) {
                return response()->json(['success' => false, 'message' => 'Flock not found'], 400);
            }

            $user = User::Create([
                'added_user_id' => $userId,
                'name' =>  $validatedData['name'],
                'user_role' =>  $validatedData['role'],
                'email' => $validatedData['email'],
                'user_phone' => $validatedData['phone'],
                'address' => $validatedData['address'],
                'password' => "12345678",
                'user_image' => $imageFullPath,
            ]);
            $roleToFieldMap = [
                'fl_supervisor' => 'flock_supervisor_user_id',
                'fl_accountant' => 'flock_accountant_user_id',
                'fl_assistant' => 'flock_assistant_user_id',
            ];

            if (isset($roleToFieldMap[$validatedData['role']])) {
                $flock->{$roleToFieldMap[$validatedData['role']]} = $user->id;
            }
            $flock->save();


            return response()->json(['success' => true, 'message' => 'Worker add successfully'], 400);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }
}
