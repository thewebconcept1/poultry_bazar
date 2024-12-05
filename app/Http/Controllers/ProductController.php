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

            foreach ($products as $product) {
                if (str_contains($product->product_image, 'storage/product_images')) {
                    $product->product_image = asset($product->product_image);
                }

                $variation = ProductVariations::where('product_id', $product->product_id)->where('variation_status', 1)->first();
                if ($variation) {
                    if (str_contains($variation->variation_image, 'storage/variation_images')) {
                        $variation->variation_image = asset($variation->variation_image);
                    }
                    $product->variation = $variation;
                }else{
                    $product->variation = [];
                }
            }
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
                'product_sec_name'  => 'nullable',
                'product_description'  => 'nullable',
                'product_image'  => 'nullable',
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
                $imageFullPath = $validatedData['product_image'];
            }

            $product = Products::create([
                'user_id' => $validatedData['user_id'],
                'product_name' => $validatedData['product_name'],
                'product_sec_name' => $validatedData['product_sec_name'],
                'product_description' => $validatedData['product_description'],
                'product_unit' => $validatedData['product_unit'],
                'product_purchase_rate' => $validatedData['product_purchase_rate'],
                'product_sale_rate' => $validatedData['product_sale_rate'],
                'product_stock' => $validatedData['product_stock'],
                'product_image' => $imageFullPath,
            ]);



            return response()->json(['success' => true, 'message' => 'Product Add Successfully'], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }

    public function addVariation(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'product_id'  => 'required',
                'variation_name'  => 'required',
                'variation_sale_rate'  => 'required',
                'variation_consumed'  => 'nullable',
                'variation_wastage'  => 'nullable',
                'variation_image'  => 'nullable',

            ]);
            $product  = Products::select('product_name')->where('product_id', $validatedData['product_id'])->first();
            if (!$product) {
                return response()->json(['success' => false, 'message' => 'Variation Add Successfully'], 422);
            }

            if ($request->hasFile('variation_image')) {
                $image = $request->file('variation_image');
                $imagePath = $image->store('variation_images', 'public');
                $imageFullPath = 'storage/' . $imagePath;
            } else {
                $imageFullPath = $validatedData['variation_image'];
            }

            $ProductVariations =    ProductVariations::create([
                'product_id' => $validatedData['product_id'],
                'product_name' => $product->product_name,
                'variation_name' => $validatedData['variation_name'],
                'variation_sale_rate' => $validatedData['variation_sale_rate'],
                'variation_consumed' => $validatedData['variation_consumed'],
                'variation_wastage' => $validatedData['variation_wastage'],
                'variation_image' => $imageFullPath,
            ]);
            return response()->json(['success' => true, 'message' => 'Variation Add Successfully', 'productVariation' => $ProductVariations], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }


    public function deleteProduct($product_id)
    {
        try {
            $product = Products::find($product_id);
            if (!$product) {
                return response()->json(['success' => false, 'message' => 'product not found'], 422);
            }
            $product->product_status  = 0;
            $product->update();
            return response()->json(['success' => true, 'message' => 'Product delete successfully'], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
    public function deleteVariation($variation_id)
    {
        try {
            $variation = ProductVariations::find($variation_id);
            if (!$variation) {
                return response()->json(['success' => false, 'message' => 'Variation not found'], 422);
            }
            $variation->variation_status  = 0;
            $variation->update();
            return response()->json(['success' => true, 'message' => 'Variation delete successfully',], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }


    public function updateProduct(Request $request, $product_id)
    {
        try {
            $product = Products::find($product_id);
            if (!$product) {
                return response()->json(['success' => false, 'message' => 'Product not found'], 404);
            }

            $imageFullPath = $product->product_image;

            if ($request->hasFile('product_image')) {
                $image = $request->file('product_image');
                if ($product->product_image && file_exists(public_path($product->product_image))) {
                    unlink(public_path($product->product_image));
                }
                $imagePath = $image->store('product_images', 'public');
                $imageFullPath = 'storage/' . $imagePath;
            }else {
                $imageFullPath = $request->product_image;
            }


            $product->update(array_merge($request->except(['product_image']), ['product_image' => $imageFullPath]));


            return response()->json(['success' => true, 'message' => 'Product updated successfully'], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
    public function updateVariation(Request $request, $variation_id)
    {
        try {
            $variation = ProductVariations::find($variation_id);

            if (!$variation) {
                return response()->json(['success' => false, 'message' => 'Variation not found'], 404);
            }

            $imageFullPath = $variation->variation_image;
            if ($request->hasFile('variation_image')) {
                $image = $request->file('variation_image');
                if ($variation->variation_image && file_exists(public_path($variation->variation_image))) {
                    unlink(public_path($variation->variation_image));
                }
                $imagePath = $image->store('variation_images', 'public');
                $imageFullPath = 'storage/' . $imagePath;
            } else {

                $imageFullPath = $request->variation_image;
            }

            $variation->update(array_merge($request->except(['variation_image']), ['variation_image' => $imageFullPath]));

            return response()->json(['success' => true, 'message' => 'Variation updated successfully'], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
}
