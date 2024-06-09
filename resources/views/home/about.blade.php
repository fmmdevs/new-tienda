@extends('layouts.app')
@section('title', 'About')

@section('content')
    <div class="container">
        <div class="header">
            <h1>Acerca de Minimal T-Shirts</h1>
            <p>Descubre quiénes somos y nuestra filosofía</p>
        </div>
        <div class="content">
            <p>En Minimal T-Shirts, creemos en la simplicidad y la elegancia. Nuestra misión es proporcionar camisetas de
                alta calidad con un diseño minimalista, aptas para cualquier ocasión.</p>

            <h2>Nuestra Historia</h2>
            <p>Minimal T-Shirts fue fundada en 2021 por un grupo de amigos apasionados por la moda y el diseño minimalista.
                Comenzamos con la idea de crear una marca que represente la simplicidad y la funcionalidad, sin comprometer
                el estilo.</p>

            <h2>Nuestro Compromiso</h2>
            <p>Nos comprometemos a utilizar materiales sostenibles y técnicas de producción responsables. Cada camiseta está
                diseñada con atención al detalle y fabricada para durar, asegurando que nuestros clientes reciban solo lo
                mejor.</p>

            <h2>Nuestro Equipo</h2>
            <p>Contamos con un equipo dedicado de diseñadores, fabricantes y especialistas en servicio al cliente que
                trabajan juntos para ofrecerte la mejor experiencia posible. Nos enorgullece nuestro trabajo y nos
                esforzamos por mejorar continuamente.</p>

            <h2>Contacto</h2>
            <p>Si tienes alguna pregunta, no dudes en ponerte en contacto con nosotros a través de nuestra <a
                    href="{{ route('home.contact') }}">página de contacto</a>. Estamos aquí para ayudarte.</p>
        </div>
    </div>

@endsection
