@extends('layouts.app')

@if ($category == 'women')

    @section('title', 'Women')
    @section('content')
        <div class="row">
            @foreach ($products as $product)
                <div class="col-6 col-md-4 col-lg-3 mb-2">
                    <div class="card">
                        <img src="{{ asset('/storage/' . $product->getImage()) }}" class="card-img-top img-card">
                        <div class="card-body text-center">
                            <a href="{{ route('product.show', ['id' => $product->getId()]) }}"
                                class="btn bg-primary text-white">{{ $product->getName() }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection

@endif

@if ($category == 'men')

    @section('title', 'Men')
    @section('content')
        <div class="row">
            @foreach ($products as $product)
                <div class="col-6 col-md-4 col-lg-3 mb-2">
                    <div class="card">
                        <img src="{{ asset('/storage/' . $product->getImage()) }}" class="card-img-top img-card">
                        <div class="card-body text-center">
                            <a href="{{ route('product.show', ['id' => $product->getId()]) }}"
                                class="btn bg-primary text-white">{{ $product->getName() }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection

@endif
