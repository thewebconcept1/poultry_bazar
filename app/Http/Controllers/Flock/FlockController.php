<?php

namespace App\Http\Controllers\Flock;

use App\Http\Controllers\Controller;
use App\Models\Flock\Flock;
use App\Models\Flock\FlockDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Catch_;

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
            $flock =  Flock::create([
                'user_id' => $user->id,
                'flock_site_id' => $validatedData['flock_site_id'],
                'flock_name' => $validatedData['flock_name'],
                'farmer_name' => $validatedData['farmer_name'],
                'flock_image' => $imageFullPath ?? null,

            ]);

            FlockDetails::Create([
                'flock_id' => $flock->flock_id,
            ]);
            return response()->json(['success' => true, 'message' => 'Flock add successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }
    public function insertDetails(Request $request, $type)
    {
        try {

            $validatedData = $request->validate([
                'flock_id' => 'required|exists:flock_details,flock_id',
                $type => 'required|array',
            ]);

            $newData = $validatedData[$type];

            $flock_detail = FlockDetails::where('flock_id', $validatedData['flock_id'])->first();

            $existingData = json_decode($flock_detail->$type, true) ?? [];

            $updatedData = array_merge($existingData, $newData);

            $flock_detail->$type = json_encode($updatedData);
            $flock_detail->save();

            return response()->json(['success' => true, 'message' => 'Flock details updated successfully', 'data' => $updatedData], 200);


            // $validatedData = $request->validate([
            //     'flock_id' => 'required|exists:flock_details,flock_id',
            //     $type => 'required|Array',
            // ]);

            // $data = json_encode($validatedData[$type], true);

            // $flock_detail = FlockDetails::where('flock_id', $validatedData['flock_id'])->first();
            // $flock_detail->$type = $data;
            // $flock_detail->save();

            // return response()->json(['success' => true, 'message' => 'Flock details added successfully', 'data' => $data], 200);

        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }

    public function getSiteFlocks($site_id)
    {
        $flocks = Flock::where('flock_site_id', $site_id)->get();
        if (!$flocks) {
            return response()->json(['success' => false, 'message' =>  "site not found"], 200);
        }

        $allUserIds = $flocks->pluck('flock_supervisor_user_id')->merge($flocks->pluck('flock_accountant_user_id'))->merge($flocks->pluck('flock_assistant_user_id'))->filter()
            ->unique();
        $users = User::select('id', 'name', 'user_role', 'user_image')->whereIn('id', $allUserIds)->get()->keyBy('id');
        foreach ($flocks as $flock) {
            $created_at = $flock->created_at;
            if (isset($flock->flock_image)) {

                $flock->flock_image = url($flock->flock_image);
            }
            $flock->days = abs(floor($created_at ? now()->diffInDays($created_at) : 0));
            $flock->total_birds = 0;
            $flock->doc_birds = 0;
            $flock->dead_birds = 0;


            $flock->total_feed = 0;
            $flock->purchase_feed = 0;
            $flock->consumed_feed = 0;


            $flock->daily_water = 0;
            $flock->weekly_water = 0;
            $flock->total_water = 0;


            $flock->supervisor = $users->get($flock->flock_supervisor_user_id);
            $flock->accountant = $users->get($flock->flock_accountant_user_id);
            $flock->assistant = $users->get($flock->flock_assistant_user_id);
        }
        return response()->json(['success' => true, 'message' =>  "Flocks get successfully", 'flocks' => $flocks], 200);
    }
}
