<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{

    // get category
    public function getCategory()
    {
        $categories = Category::where('category_status', 1)->get();

        return view('categories', ['categories', $categories]);
    }
    // get category

    // delete category
    public function deleteCategory(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'category_id' => 'required',
            ]);

            $category = Category::where('category_id', $validatedData['category_id'])->first();

            $category->category_status = 0;
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
    // delete category

    // add Category
    public function addCategory(Request $request)
    {
        try {
            $user = session('user_details');

            $categoryId = $request->input('category_id');
            $validatedData = $request->validate([
                'category_name' => 'required',
            ]);

            if ($categoryId != null) {

                $category = Category::where('category_id', $categoryId)->first();

                if ($request->hasFile('category_image')) {
                    // Get the path of the image from the animal record
                    $imagePath = public_path($category->category_image); // Get the full image path

                    // Delete the image file if it exists
                    if (file_exists($imagePath)) {
                        unlink($imagePath); // Delete the image from the file system
                    }

                    $image = $request->file('category_image');
                    // Store the image in the 'animal_images' folder and get the file path
                    $imagePath = $image->store('category_images', 'public'); // stored in 'storage/app/public/animal_images'
                    $imageFullPath = 'storage/' . $imagePath;
                    $category->category_image = $imageFullPath;
                }

                $category->category_name = $validatedData['category_name'];
                $category->save();

                return response()->json(['success' => true, 'message' => 'Category updated successfully'], 200);
            } else {

                if ($request->hasFile('category_image')) {
                    $image = $request->file('category_image');
                    // Store the image in the 'animal_images' folder and get the file path
                    $imagePath = $image->store('category_images', 'public'); // stored in 'storage/app/public/animal_images'
                    $imageFullPath = 'storage/' . $imagePath;
                }

                $category = Category::create([
                    'addded_user_id' => $user->id,
                    'category_name' => $validatedData['category_name'],
                    'category_image' => $imageFullPath,
                ]);

                return response()->json(['success' => true, 'message' => 'Category added successfully'], 200);
            }
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
    // add Category
}
