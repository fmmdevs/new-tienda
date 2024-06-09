@extends('layouts.app')
@section('title', 'Pedidos')
@section('content')
    @forelse ($messages as $message)
        <div class="row">
            <div class="card mb-4 ">
                <div class="card-header"> Mensaje #{{ $message->id }} </div>
                <div class="card-body">
                    <h5 class="card-subtitle mb-2 text-body-secondary">Nombre: {{ $message->name }}</h5>
                    <h6 class="card-title">Email: {{ $message->email }}</h6>
                    <hr>
                    <p>Mensaje:</p>
                    <p class="card-text">{{ $message->message }}</p>
                </div>
                <div class="card-footer text-body-secondary">
                    <p>Recibido: {{ $message->created_at }} desde {{ $message->city }}</p>
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-danger" role="alert"> Parece que aún no has recibido ningún mensaje =(.
        </div>
    @endforelse
@endsection
