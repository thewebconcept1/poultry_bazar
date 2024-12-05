<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\ProductVariations;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function getProducts()
    {
        try {
            $products = Products::where('product_status', 1)->get();

            return response()->json(['success' => true, 'message' => ' Product Get Successfully', 'products' => $products], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
    public function addProduct(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'user_id'  => 'required',
                'product_name'  => 'required',
                'product_description'  => 'required',
                'product_image'  => 'required',
                'product_unit'  => 'required',
                'product_purchase_rate'  => 'required',
                'product_sale_rate'  => 'required',
                'product_stock'  => 'required',
            ]);

            if ($request->hasFile('product_image')) {
                $image = $request->file('product_image');
                $imagePath = $image->store('product_images', 'public');
                $imageFullPath = 'storage/' . $imagePath;
            } else {
                $imageFullPath = null;
            }

            $product = Products::create([
                'added_user_id' => $validatedData['user_id'],
                'media_image' => $imageFullPath,
                'product_name' => $validatedData['product_name'],
                'product_description' => $validatedData['product_description'],
                'product_image' => $validatedData['product_image'],
                'product_unit' => $validatedData['product_unit'],
                'product_purchase_rate' => $validatedData['product_purchase_rate'],
                'product_sale_rate' => $validatedData['product_sale_rate'],
                'product_stock' => $validatedData['product_stock'],
            ]);



            return response()->json(['success' => true, 'message' => ' Product Add Successfully'], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }

    public function addVariation(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'user_id'  => 'required',
                'product_id'  => 'required',
                'variation_name'  => 'required|array',
                'variation_sale_rate'  => 'required',
                'variation_consumed'  => 'required',
                'variation_wastage'  => 'required',

            ]);
            $product_name  = Products::select('product_name')->where('product_id', $validatedData['product_id'])->first();
            for ($i = 0; $i < count($validatedData['variation_name']); $i++) {
                ProductVariations::create([
                    'user_id' => $validatedData['user_id'],
                    'product_id' => $validatedData['product_id'],
                    'variation_name' => $validatedData['variation_name'][$i],
                    'variation_sale_rate' => $validatedData['variation_sale_rate'][$i],
                    'variation_consumed' => $validatedData['variation_consumed'][$i],
                    'variation_wastage' => $validatedData['variation_wastage'][$i],
                ]);
            }
            return response()->json(['success' => true, 'message' => 'Variation Add Successfully'], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
}
