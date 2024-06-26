@extends('layouts.app')
@section('title', 'Detail')
{{-- @section('subtitle', $viewData['subtitle']) --}}
@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                @if (isset($product->image))
                    <img src="{{ asset('/storage/' . $product->image) }}" class="img-fluid rounded-start">
                @endif
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"> {{ $product->name }} ({{ $product->price }}€)
                    </h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">
                    <form method="POST" action="{{ route('cart.add', $product->id) }}">
                        <div class="row">
                            @csrf
                            <div class="col-auto">
                                <div class="input-group col-auto">
                                    <div class="input-group-text">Cantidad</div>
                                    <input type="number" min="1" max="10" class="form-control quantity-input"
                                        name="quantity" value="1">
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn bg-primary text-white" type="submit">Añadir al Carrito</button>
                            </div>
                        </div>
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
