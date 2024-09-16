<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function create()
    {
        return view('order.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'commande' => 'required|string',
            'lieu_livraison' => 'required|string',
            'telephone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
        ]);



        Order::create($validated);

        // Redirect to the homepage after successful order
    return redirect('/')->with('success', 'Commande envoyée avec succès!');
    }

     // Method to update status to 'traité'
    public function updateStatusToTraite($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'traité';
        $order->save();

        return redirect()->back()->with('status', 'Order status updated to traité.');
    }

    // Method to update status to 'canceled'
    public function updateStatusToCanceled($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'canceled';
        $order->save();

        return redirect()->back()->with('status', 'Order status updated to canceled.');
    }
}
