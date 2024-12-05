<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function getProducts(){
        try {
            $products = null;
            return response()->json(['success' => true, 'message' => ' Product Get Successfully' , 'products' => $products], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }

    }
    public function addProduct(Request $request)
    {
        try {
            $productId = $request->input('product_id');
            $validatedData = $request->validate([
                'added_user_id'=> 'required',
            ]);
            if ($productId != null) {

            }else{

                if ($request->hasFile('product_image')) {
                    $image = $request->file('product_image');
                    $imagePath = $image->store('product_images', 'public');
                    $imageFullPath = 'storage/' . $imagePath;
                } else {
                    $imageFullPath = null;
                }

                $media = Products::create([
                    'added_user_id' => $user['id'],
                    'media_image' => $imageFullPath,
         
                ]);

            }


            return response()->json(['success' => true, 'message' => ' Product Add Successfully'], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }

    public function addVariation(Request $request)
    {
        try {

            $productId = $request->input('product_id');
            $validatedData = $request->validate([

            ]);
            if ($productId != null) {


            }else{
     foreach ($validatedData['variation_id'] as $i => $variation) {
        $assignment = Variation::create([

        ]);
    }
                


            }


            return response()->json(['success' => true, 'message' => 'Variation Add Successfully'], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
}
