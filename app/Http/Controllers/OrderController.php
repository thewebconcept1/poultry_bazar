<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getOrders()
    {
        $orders = Orders::all();
            foreach($orders as $order){
                $order->order_item_details = json_decode($order->order_item_details);
            }
        return response()->json(['success' => true, 'message' => 'Order get successfully', 'orders' => $orders], 200);
    }


    public function addOrder(Request $request)
    {
        try {
// "variation_id"
// "variation_quantity"
// "variation_weight"
// "variation_total"
            $validatedData = $request->validate([
                "user_id" => "required",
                "product_id" => "required",
                "customer_id" => "nullable",
                "customer_name" => "required",
                "customer_phone" => "nullable",
                "order_item_details" => "required|array",
                "order_type" => "nullable",
                "grand_total" => "required",

            ]);
            Orders::create([
                "user_id" => $validatedData['user_id'],
                "product_id" => $validatedData['product_id'],
                "customer_id" => $validatedData['customer_id'],
                "customer_name" => $validatedData['customer_name'],
                "customer_phone" => $validatedData['customer_phone'],
                "order_item_details" => json_encode($validatedData['order_item_details']),
                "order_type" => $validatedData['order_type'],
                "grand_total" => $validatedData['grand_total'],
            ]);


            return response()->json(['success' => true, 'message' => 'Order add successfully'], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
}
