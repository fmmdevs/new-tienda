<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function orders()
    {
        // Obtenemos los pedidos que ha hecho el usuario que esta autenticado
        $orders = Order::where('user_id', Auth::user()->id)->get();
        return view('myaccount.orders', compact('orders'));
    }

    public function downloadPdf($orderId)
    {
        $order = Order::find($orderId);
        // construimos el pdf a partir de la vista
        $pdf = Pdf::loadView('pdf.invoice', compact('order'));
        // descargamos el archivo
        return $pdf->download('my-example.pdf');
    }
}
