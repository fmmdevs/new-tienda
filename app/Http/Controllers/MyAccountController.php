<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function orders()
    {
        // Obtenemos los pedidos que ha hecho el usuario que esta autenticado
        $orders = Order::where('user_id', Auth::user()->id)->get();
        return view('myaccount.orders', compact('orders'));
    }
}
