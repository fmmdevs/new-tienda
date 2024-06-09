<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
        }

        .header,
        .footer {
            text-align: center;
            position: fixed;
            width: 100%;
        }

        .header {
            top: 0;
        }

        .footer {
            bottom: 0;
        }

        h2 {
            text-align: center;
        }

        .content {
            margin-top: 100px;
            margin-bottom: 50px;
        }

        .order-details,
        .order-items {
            width: 100%;
            margin-bottom: 20px;
        }

        .order-details th,
        .order-details td,
        .order-items th,
        .order-items td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        .order-items th {
            background-color: #f2f2f2;
        }

        .text-right {
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Minimal T-Shirts</h1>
    </div>
    <div class="content">
        <h2>Detalles del Pedido</h2>

        <table class="order-details">
            <tr>
                <th>Pedido ID</th>
                <td>{{ $order->id }}</td>
            </tr>
            <tr>
                <th>Cliente</th>
                <td>{{ $order->user->name }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{{ $order->created_at->format('d/m/Y') }}</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>{{ $order->total }}€</td>
            </tr>
        </table>
        <br>
        <h2>Artículos del Pedido</h2>
        <table class="order-items">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->items as $item)
                    <tr>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->price }}€</td>
                        <td>{{ $item->price * $item->quantity }}€</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="footer">
        <p>Gracias por su compra, <strong>{{ $order->user->name }}</strong>!</p>
    </div>
</body>

</html>
