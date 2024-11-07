<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    // delete media
    public function deleteMedia(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'media_id' => 'required',
            ]);
            
            $media = Media::where('media_id', $validatedData['media_id'])->first();

            $media->media_status = 0;

            return response()->json(['success' => true, 'message' => 'Media deleted successfully'], 200);

        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
    // delete media

    // get media
    public function getMedia($type = null)
    {
        $user = session('user_details');

        if ($type == 'blogs') {
            $media = Media::where('added_user_id', $user['id'])->where('media_type', $type)->where('media_status', 1)->get();
            return view('blogs', ['media' => $media]);
        } elseif ($type == 'diseases') {
            $media = Media::where('added_user_id', $user['id'])->where('media_type', $type)->where('media_status', 1)->get();
            return view('diseases', ['media' => $media]);
        } elseif ($type == 'consultancy') {
            $media = Media::where('added_user_id', $user['id'])->where('media_type', $type)->where('media_status', 1)->get();
            return view('consultancyvideos', ['media' => $media]);
        }else {
            return response()->json(['success' => false, 'message' => 'Please add type of the media'], 400);
        }
    }
    // get media

    // add media
    public function addMedia(Request $request)
    {
        try {
            $user = session('user_details');

            $mediaId = $request->input('media_id');

            $validatedData = $request->validate([
                'category_id' => 'required',
                'media_title' => 'required',
                'media_description' => 'nullable',
                'media_author' => 'nullable',
                'media_type' => 'required',
            ]);

            if ($mediaId != null) {
                $media = Media::where('media_id', $mediaId)->first();

                if ($request->hasFile('media_image')) {
                    // Get the path of the image from the animal record
                    $imagePath = public_path($media->media_image); // Get the full image path

                    // Delete the image file if it exists
                    if (file_exists($imagePath)) {
                        unlink($imagePath); // Delete the image from the file system
                    }

                    $image = $request->file('media_image');
                    // Store the image in the 'animal_images' folder and get the file path
                    $imagePath = $image->store('media_images', 'public'); // stored in 'storage/app/public/animal_images'
                    $imageFullPath = 'storage/' . $imagePath;
                    $media->media_image = $imageFullPath;
                }

                $media->category_id = $validatedData['category_id'];
                $media->media_title = $validatedData['media_title'];
                $media->media_description = $validatedData['media_description'];
                $media->media_author = $validatedData['media_author'];
                $media->media_type = $validatedData['media_type'];

                $media->save();

                return response()->json(['success' => true, 'message' => 'Media updated successfully'], 200);
            } else {
                if ($request->hasFile('media_image')) {
                    $image = $request->file('media_image');
                    // Store the image in the 'animal_images' folder and get the file path
                    $imagePath = $image->store('media_images', 'public'); // stored in 'storage/app/public/animal_images'
                    $imageFullPath = 'storage/' . $imagePath;
                }

                $media = Media::create([
                    'added_user_id' => $user['id'],
                    'category_id' => $validatedData['category_id'],
                    'media_title' => $validatedData['media_title'],
                    'media_description' => $validatedData['media_description'],
                    'media_author' => $validatedData['media_author'],
                    'media_type' => $validatedData['media_type'],
                    'media_image' => $imageFullPath,
                ]);

                return response()->json(['success' => true, 'message' => 'Media added successfully'], 200);
            }
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
    // add media
}
