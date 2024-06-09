@extends('layouts.app')
@section('title', 'Pedidos')
@section('content')
    @forelse ($orders as $order)
        <div class="card mb-4">
            <div class="card-header"> Order #{{ $order->id }} </div>
            <div class="card-body">
                <b>Date:</b> {{ $order->created_at }}
                <br />
                <b>Total:</b> ${{ $order->total }}<br />
                <table class="table table-bordered table-striped text-center mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Item ID</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    <a class="link-success" href="{{ route('product.show', $item->product->id) }}">
                                        {{ $item->product->name }} </a>
                                </td>
                                <td>${{ $item->price }}</td>
                                <td>{{ $item->product->category->name }}</td>
                                <td>{{ $item->quantity }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <a class="text-center p-1" href="{{ route('myaccount.pdf', $order->id) }}"><button
                    class="btn btn-primary text-center">
                    Descargar recibo
                    PDF</button></a>

        </div>

    @empty
        <div class="alert alert-danger" role="alert"> Seems to be that you have not purchased anything in our store =(.
        </div>
    @endforelse
@endsection
