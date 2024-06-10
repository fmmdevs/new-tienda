@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <h2 class="text-center">Especial Verano 2024</h2>

    <!-- Container fluid para la imagen de bienvenida ocupe todo el ancho -->
    <div class="container-fluid">

        <div class="row">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5"
                        aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="img/carrousell/carrousell-1.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Verano 2024 - Moda Mujer</h5>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="10000">
                        <img src="img/carrousell/carrousell-2.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Verano 2024 - Moda Mujer</h5>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="10000">
                        <img src="img/carrousell/carrousell-3.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Verano 2024 - Moda Mujer</h5>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="10000">
                        <img src="img/carrousell/carrousell-4.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Verano 2024 - Moda Mujer</h5>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="10000">
                        <img src="img/carrousell/carrousell-5.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Verano 2024 - Moda Mujer</h5>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="10000">
                        <img src="img/carrousell/carrousell-6.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Verano 2024 - Moda Mujer</h5>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>




    <div class="container">
        <!-- En esta fila anido todos los elementos section para poder cambiar el orden de cada sección-->
        <div class="row">

            <!-- Ahora aplico la clase col-12 y la ordenación pertinente -->
            <section id="camisetas-hombre" class="col-12 col-sm-6 col-md-6">
                <div class="row d-sm-flex justify-content-center align-items-center">
                    <div class="col-12">
                        <img src="img2/camisetas-hombre.jpg" alt="Camisetas para Hombre">
                    </div>
                    <div class="col-12 ">
                        <h2>Camisetas para Hombre</h2>
                        <p>Descubre nuestra colección de camisetas minimalistas para hombre, diseñadas para combinar con
                            cualquier estilo y ocasión.</p>
                    </div>

                </div>
            </section>

            <section id="camisetas-mujer" class="col-12">
                <div class="row d-sm-flex justify-content-center align-items-center">
                    <div class="col-12 col-sm-6 col-lg-12 order-sm-2 ">
                        <h2>Camisetas para Mujer</h2>
                        <p>Explora nuestra selección de camisetas minimalistas para mujer, perfectas para un look elegante y
                            sencillo.</p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-12 order-sm-1 ">
                        <img src="img2/camisetas-mujer.jpg" alt="Camisetas para Mujer">
                    </div>
                </div>
            </section>

            <section id="sobre-nosotros" class="col-12">
                <div class="row d-sm-flex justify-content-center align-items-center">
                    <div class="col-12 col-sm-6 col-lg-12 order-sm-1 order-lg-1">
                        <h2>Sobre Nosotros</h2>
                        <p>Somos una tienda comprometida con el diseño y la calidad, ofreciendo camisetas minimalistas que
                            destacan por su sencillez y elegancia.</p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-12 order-sm-2 order-lg-2">
                        <img src="img2/sobre-nosotros.jpg" alt="Sobre Nosotros">
                    </div>
                </div>
            </section>

            <section id="nuestro-equipo" class="col-12">
                <h2>Nuestro Equipo</h2>
                <div class="row">
                    <div class="col-lg-4 miembro">
                        <div class="row d-sm-flex justify-content-center align-items-center">
                            <div class="offset-3 offset-sm-1 d-lg-none"></div>
                            <div class="col-6 col-sm-5 col-lg-10 scale-up-center">
                                <img class="rounded-circle" src="img2/equipo1.jpg" alt="Miembro del Equipo 1">
                            </div>
                            <div class="offset-3 d-sm-none"></div>
                            <div class="offset-sm-1 d-lg-none"></div>
                            <div class="col-6 col-sm-5 col-lg-10">
                                <h3>Diseñador</h3>
                                <p>Nuestro diseñador principal, encargado de crear camisetas que fusionan simplicidad y
                                    estilo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 miembro">
                        <div class="row d-sm-flex justify-content-center align-items-center">
                            <div class="offset-3 offset-sm-1 d-lg-none"></div>
                            <div class="col-6 col-sm-5 col-lg-10 scale-up-center">
                                <img class="rounded-circle" src="img2/equipo2.jpg" alt="Miembro del Equipo 2">
                            </div>
                            <div class="offset-3 d-sm-none"></div>
                            <div class="offset-sm-1 d-lg-none"></div>
                            <div class="col-6 col-sm-5 col-lg-10">
                                <h3>Gerente de Ventas</h3>
                                <p>Nuestro gerente de ventas, siempre dispuesto a ayudarte a encontrar la camiseta perfecta.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 miembro">
                        <div class="row d-sm-flex justify-content-center align-items-center">
                            <div class="offset-3 offset-sm-1 d-lg-none"></div>
                            <div class="col-6 col-sm-5 col-lg-10 scale-up-center">
                                <img class="rounded-circle" src="img2/equipo3.jpg" alt="Miembro del Equipo 3">
                            </div>
                            <div class="offset-3 d-sm-none"></div>
                            <div class="offset-sm-1 d-lg-none"></div>
                            <div class="col-6 col-sm-5 col-lg-10">
                                <h3>Atención al Cliente</h3>
                                <p>Nuestra experta en atención al cliente, lista para asistirte en cualquier consulta.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
