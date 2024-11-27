<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Media;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
            $media->update();
            return response()->json(['success' => true, 'message' => 'Media deleted successfully'], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
    // delete media

    // approve media
    public function approveMedia(Request $request)
    {
        try {
            $user = session('user_details');
            if ($user['user_role'] != 'superadmin') {
                return response()->json(['success' => false, 'message' => 'You are not authorized to the operation'], 400);
            }
            $validatedData = $request->validate([
                'media_id' => 'required',
            ]);

            $media = Media::where('media_id', $validatedData['media_id'])->first();

            $media->media_status = 1;
            $media->save();

            return response()->json(['success' => true, 'message' => 'Media Approved'], 200);

        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
    // approve media

    // get media
    public function getMedia($type = null)
    {
        $user = session('user_details');

        if ($user['user_role'] != 'superadmin') {
            if ($type == 'blogs') {
                $media = Media::where('added_user_id', $user['id'])->where('media_type', $type)->where('media_status', 1)->get();
                $categories = Category::where('category_status', 1)->get();
                foreach ($media as $blog) {
                    $blog->date = Carbon::parse($blog->created_at)->format('M d, Y');
                    $category = $categories->firstWhere('category_id', $blog->category_id);
                    $blog->category_name = $category ? $category->category_name : null;
                }
                return view('blogs', ['media' => $media, "categories" => $categories]);
            } elseif ($type == 'diseases') {
                $media = Media::where('added_user_id', $user['id'])->where('media_type', $type)->where('media_status', 1)->get();
                $categories = Category::where('category_status', 1)->where('category_type', $type)->get();
                foreach ($media as $diseases) {
                    $diseases->date = Carbon::parse($diseases->created_at)->format('M d, Y');
                    $category = $categories->firstWhere('category_id', $diseases->category_id);
                    $diseases->category_name = $category ? $category->category_name : null;
                }
                return view('diseases', ['media' => $media, "categories" => $categories]);
            } elseif ($type == 'consultancy') {
                $media = Media::where('added_user_id', $user['id'])->where('media_type', $type)->where('media_status', 1)->get();
                $categories = Category::where('category_status', 1)->where('category_type', $type)->get();
                foreach ($media as $diseases) {
                    $diseases->date = Carbon::parse($diseases->created_at)->format('M d, Y');
                    $category = $categories->firstWhere('category_id', $diseases->category_id);
                    $diseases->category_name = $category ? $category->category_name : null;
                }
                return view('consultancyvideos', ['media' => $media, "categories" => $categories]);
            } elseif ($type == 'pending') {
                $media = Media::where('media_status', 2)->get();
                $categories = Category::where('category_status', 1)->get();
                foreach ($media as $diseases) {
                    $diseases->date = Carbon::parse($diseases->created_at)->format('M d, Y');
                    $category = $categories->firstWhere('category_id', $diseases->category_id);
                    $diseases->category_name = $category ? $category->category_name : null;
                }
                return view('pendingMedia', ['media' => $media, "categories" => $categories]);
            } else {
                return response()->json(['success' => false, 'message' => 'Please add type of the media'], 400);
            }
        } else {
            if ($type == 'blogs') {
                $media = Media::where('media_type', $type)->where('media_status', 1)->get();
                $categories = Category::where('category_status', 1)->get();
                foreach ($media as $blog) {
                    $blog->date = Carbon::parse($blog->created_at)->format('M d, Y');
                    $category = $categories->firstWhere('category_id', $blog->category_id);
                    $blog->category_name = $category ? $category->category_name : null;
                }
                return view('blogs', ['media' => $media, "categories" => $categories]);
            } elseif ($type == 'diseases') {
                $media = Media::where('media_type', $type)->where('media_status', 1)->get();
                $categories = Category::where('category_status', 1)->where('category_type', $type)->get();
                foreach ($media as $diseases) {
                    $diseases->date = Carbon::parse($diseases->created_at)->format('M d, Y');
                    $category = $categories->firstWhere('category_id', $diseases->category_id);
                    $diseases->category_name = $category ? $category->category_name : null;
                }
                return view('diseases', ['media' => $media, "categories" => $categories]);
            } elseif ($type == 'consultancy') {
                $media = Media::where('media_type', $type)->where('media_status', 1)->get();
                $categories = Category::where('category_status', 1)->where('category_type', $type)->get();
                foreach ($media as $diseases) {
                    $diseases->date = Carbon::parse($diseases->created_at)->format('M d, Y');
                    $category = $categories->firstWhere('category_id', $diseases->category_id);
                    $diseases->category_name = $category ? $category->category_name : null;
                }
                return view('consultancyvideos', ['media' => $media, "categories" => $categories]);
            } elseif ($type == 'pending') {
                $media = Media::where('media_status', 2)->get();
                $categories = Category::where('category_status', 1)->get();
                foreach ($media as $diseases) {
                    $diseases->date = Carbon::parse($diseases->created_at)->format('M d, Y');
                    $category = $categories->firstWhere('category_id', $diseases->category_id);
                    $diseases->category_name = $category ? $category->category_name : null;
                }
                return view('pendingMedia', ['media' => $media, "categories" => $categories]);
            } else {
                return response()->json(['success' => false, 'message' => 'Please add type of the media'], 400);
            }
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
                    if (!empty($media->media_image) && file_exists($imagePath)) {
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
                $media->media_status = $user['user_role'] == 'superadmin' ? 1 : 2;

                $media->save();

                return response()->json(['success' => true, 'message' => 'Media updated successfully'], 200);
            } else {
                if ($request->hasFile('media_image')) {
                    $image = $request->file('media_image');
                    // Store the image in the 'animal_images' folder and get the file path
                    $imagePath = $image->store('media_images', 'public'); // stored in 'storage/app/public/animal_images'
                    $imageFullPath = 'storage/' . $imagePath;
                } else {
                    $imageFullPath = null;
                }

                $media = Media::create([
                    'added_user_id' => $user['id'],
                    'category_id' => $validatedData['category_id'],
                    'media_title' => $validatedData['media_title'],
                    'media_description' => $validatedData['media_description'],
                    'media_author' => $validatedData['media_author'],
                    'media_type' => $validatedData['media_type'],
                    'media_image' => $imageFullPath,
                    'media_status' => $user['user_role'] == 'superadmin' ? 1 : 2,
                ]);

                return response()->json(['success' => true, 'message' => 'Media added successfully'], 200);
            }
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
    // add media
}
