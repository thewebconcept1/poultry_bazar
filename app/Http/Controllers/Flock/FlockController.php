<?php

namespace App\Http\Controllers\Flock;

use App\Http\Controllers\Controller;
use App\Models\Flock\Flock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FlockController extends Controller
{
    public function insertFlock(Request $request)
    {
        
        try {

            $user = Auth::user();

            $validatedData = $request->validate([
                'flock_site_id' => 'required',
                'flock_name' => 'required',
                'farmer_name' => 'nullable',
                'flock_image' => 'nullable|image',
            ]);

            if ($request->hasFile('flock_image')) {
                $image = $request->file('flock_image');
                $imagePath = $image->store('flock_images', 'public');
                $imageFullPath = 'storage/' . $imagePath;
            }
            Flock::create([
                'user_id' => $user->id,
                'flock_site_id' => $validatedData['flock_site_id'],
                'flock_name' => $validatedData['flock_name'],
                'farmer_name' => $validatedData['farmer_name'],
                'flock_image' => $imageFullPath ?? null,

            ]);
            return response()->json(['success' => true, 'message' => 'Flock add successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }
}
