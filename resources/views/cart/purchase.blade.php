@extends('layouts.app')
@section('title', 'Success')
@section('content')
    <div class="card">
        <div class="card-header"> Compra realizada </div>
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                Felicidades, has completado tu compra. El ID de tu orden es <b>#{{ $order->id }}</b>
            </div>
        </div>
    </div>
@endsection
