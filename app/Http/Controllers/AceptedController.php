<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AceptedController extends Controller
{
     public function index()
    {
         // Fetch all orders from the database
        $orders = Order::where('status', 'Accepted')->get();

        // Pass orders to the view
        return view('admin.acepted', compact('orders'));
    }
}
