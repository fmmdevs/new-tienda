@extends('layouts.app')
@section('title', 'Contact')

@section('content')
    <div class="header">
        <h1>Contáctanos</h1>
        <p>En Minimal T-Shirts, nos encantaría saber de ti. Completa el siguiente formulario y nos pondremos en contacto
            contigo lo antes posible.</p>
    </div>
    <form>
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico" required>
        </div>
        <div class="form-group">
            <label for="subject">Asunto:</label>
            <input type="text" class="form-control" id="subject" placeholder="Ingresa el asunto" required>
        </div>
        <div class="form-group">
            <label for="message">Mensaje:</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Escribe tu mensaje aquí" required></textarea>
        </div>
        <button type="submit" class="btn btn-custom btn-block">Enviar Mensaje</button>
    </form>
    </div>

@endsection
