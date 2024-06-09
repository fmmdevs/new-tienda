@extends('layouts.app')
@section('title', 'Contact')

@section('content')
    <div class="row">
        <h1 class="text-center">Contacta con nosotros</h1>
    </div>
    <div class="container d-flex align-items-center flex-column">
        @if (isset($success))
            {{-- Si el usuario esta autenticado y no ha verificado su email mostramos un mensaje --}}
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                "Formulario enviado correctamente"
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h2>@yield('subtitle')</h2>
    </div>
    <form class="row g-5 p-5 text-center text-md-start" method="post" action="{{ route('contact.store') }}">
        @csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nombre</label>
            <input name="name" type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Ciudad</label>
            <input name="city" type="text" class="form-control" id="inputAddress">
        </div>


        <div class="col-10>
            <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>


@endsection
