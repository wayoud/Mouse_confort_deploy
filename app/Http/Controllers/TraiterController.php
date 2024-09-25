<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class TraiterController extends Controller
{

     public function index()
    {
         // Fetch all orders from the database
        $orders = Order::where('status', 'traité')->get();

        // Pass orders to the view
        return view('admin.traiter', compact('orders'));
    }
}
