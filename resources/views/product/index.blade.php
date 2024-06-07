@extends('layouts.app')


@section('title', 'Women')
@section('content')
    {{-- Recorremos las categeorias --}}
    @foreach ($categories as $cat)
        <div class="row">
            @foreach ($products as $product)
                {{-- Recorremos los productos --}}
                @if ($product->category->name == $category && $cat->name == $category)
                    {{-- Si el nombre de la categoria del producto coincide con el category de la ruta mostramos esa categoria --}}
                    {{-- Ahora si añadimos una categorias y productos de esa categoria se muestran de forma automatica --}}
                    <div class="col-6 col-md-4 col-lg-3 mb-2">
                        <div class="card">
                            <img src="{{ asset('/storage/' . $product->image) }}" class="card-img-top img-card">
                            <div class="card-body text-center">
                                <a href="{{ route('product.show', $product->id) }}"
                                    class="btn bg-secondary text-white">{{ $product->name }}</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @endforeach

@endsection
