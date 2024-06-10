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
                        <img src="img/landing/carrousell/carrousell-1.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Verano 2024 - Moda Mujer</h5>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="10000">
                        <img src="img/landing/carrousell/carrousell-2.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Verano 2024 - Moda Mujer</h5>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="10000">
                        <img src="img/landing/carrousell/carrousell-3.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Verano 2024 - Moda Mujer</h5>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="10000">
                        <img src="img/landing/carrousell/carrousell-4.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Verano 2024 - Moda Mujer</h5>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="10000">
                        <img src="img/landing/carrousell/carrousell-5.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Verano 2024 - Moda Mujer</h5>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="10000">
                        <img src="img/landing/carrousell/carrousell-6.jpeg" class="d-block w-100" alt="...">
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
        <div class="row ">
            <hr>
            <!-- Ahora aplico la clase col-12 y la ordenación pertinente -->
            <section id="camisetas-hombre" class="col-12 ">
                <a href="{{ route('product.index', 'Hombre') }}"
                    class="row d-sm-flex justify-content-center align-items-center p-5">
                    <div class="col-12 col-sm-6 col-lg-12 order-sm-1 order-lg-1 text-lg-center">
                        <h2 class="text-lg-center">Camisetas para Hombre</h2>
                        <p>Descubre nuestra colección de camisetas minimalistas para hombre, diseñadas para combinar con
                            cualquier estilo y ocasión.</p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-12 order-sm-1 order-lg-2 d-flex justify-content-center">
                        <img class="main-img" src="img/landing/main/man.jpeg" alt="Camisetas para Hombre">
                    </div>
                </a>
            </section>
            <hr>

            <section id="camisetas-mujer" class="col-12 p-5 ">
                <a href="{{ route('product.index', 'Mujer') }}"
                    class="row d-sm-flex justify-content-center align-items-center">
                    <div class="col-12 col-sm-6 col-lg-12 order-sm-2 order-lg-1 text-lg-center">
                        <h2>Camisetas para Mujer</h2>
                        <p>Explora nuestra selección de camisetas minimalistas para mujer, perfectas para un look elegante y
                            sencillo.</p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-12 order-sm-1 order-lg-2 d-flex justify-content-center">
                        <img class="main-img" src="img/landing/main/woman.jpeg" alt="Camisetas para Mujer">
                    </div>
                </a>
            </section>
            <hr>

            {{-- <section id="sobre-nosotros" class="col-12">
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
            </section> --}}

            <section id="nuestro-equipo" class="col-12 p-5">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">Nuestro Equipo</h2>
                    </div>

                </div>
                <div class="row text-center">
                    <div class="col-lg-4 miembro p-4">
                        <div class="row d-sm-flex justify-content-center align-items-center">
                            <div class="offset-3 offset-sm-1 d-lg-none"></div>
                            <div class="col-6 col-sm-5 col-lg-10 scale-up-center">
                                <img class="rounded-circle" src="img/landing/team/designer.jpeg" alt="Diseñadora">
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

                    <div class="col-lg-4 miembro p-4">
                        <div class="row d-sm-flex justify-content-center align-items-center">
                            <div class="offset-3 offset-sm-1 d-lg-none"></div>
                            <div class="col-6 col-sm-5 col-lg-10 scale-up-center">
                                <img class="rounded-circle" src="img/landing/team/salesman.jpeg" alt="Gerente de ventas">
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

                    <div class="col-lg-4 miembro p-4">
                        <div class="row d-sm-flex justify-content-center align-items-center">
                            <div class="offset-3 offset-sm-1 d-lg-none"></div>
                            <div class="col-6 col-sm-5 col-lg-10 scale-up-center">
                                <img class="rounded-circle" src="img/landing/team/customer-service.jpeg"
                                    alt="Atención al cliente">
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
