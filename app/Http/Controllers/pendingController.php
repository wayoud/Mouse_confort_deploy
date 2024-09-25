<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class pendingController extends Controller
{

     public function index()
    {
         // Fetch all orders from the database
        $orders = Order::where('status', 'pending')->get();

        // Pass orders to the view
        return view('admin.pending', compact('orders'));
    }
}
