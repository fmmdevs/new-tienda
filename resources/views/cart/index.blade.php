@extends('layouts.app')
@section('title', 'Cart')
@section('content')
    <div class="card">
        <div class="card-header"> Productos en la cesta </div>
        <div class="card-body">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>${{ $product->price }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ session('products')[$product->id] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="text-end">
                    <a class="btn btn-outline-secondary mb-2"><b>Total a pagar:</b> ${{ $total }}</a>
                    @if (count($products) > 0)
                        <a href="{{ route('cart.purchase') }}" class="btn bg-primary text-white mb-2">Comprar</a>
                        <a href="{{ route('cart.delete') }}">
                            <button class="btn btn-danger mb-2"> Eliminar todos los productos de la cesta </button>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
