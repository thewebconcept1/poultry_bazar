<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function getOrders()
    {
        $user = Auth::user();

        $orders = Orders::where('user_id', $user->id)->get();
        foreach ($orders as $order) {
            $order->order_item_details = json_decode($order->order_item_details);
        }
        return response()->json(['success' => true, 'message' => 'Order get successfully', 'orders' => $orders], 200);
    }


    public function addOrder(Request $request)
    {
        try {
            $user = Auth::user();
            $validatedData = $request->validate([
                "product_id" => "required",
                "customer_id" => "nullable",
                "customer_name" => "required",
                "customer_phone" => "nullable",
                "order_item_details" => "required|array",
                "order_type" => "nullable",
                "grand_total" => "required",

            ]);
            Orders::create([
                "user_id" => $user->id,
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

    public function saleReport()
    {
        $user = Auth::user();
        $report = [];

        $filter = request('filter');
        $dateFrom = request('date_from');
        $dateTo = request('date_to');

        $query = Orders::select('customer_name', 'customer_phone', 'grand_total', 'created_at')->where('user_id', $user->id);

        if ($filter === 'today') {
            $query->whereDate('created_at', Carbon::today());
        } elseif ($filter === 'week') {
            $query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
        } elseif ($filter === 'month') {
            $query->whereMonth('created_at', Carbon::now()->month)->whereYear('created_at', Carbon::now()->year);
        }

        if ($dateFrom) {
            $query->whereDate('created_at', '>=', Carbon::parse($dateFrom));
        }
        if ($dateTo) {
            $query->whereDate('created_at', '<=', Carbon::parse($dateTo));
        }
        $orders = $query->get();
        foreach ($orders as $order) {
            $order->order_date = Carbon::parse($order->created_at)->format('M d, Y');
        }
        $grandTotal = $orders->sum('grand_total');

        $report['grand_total'] = $grandTotal;
        $report['orders'] = $orders;

        return response()->json(['success' => true, 'message' => 'Report fetched successfully', 'report' => $report], 200);
    }
}
