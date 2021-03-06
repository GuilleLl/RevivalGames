@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6 mb-5 pb-5">

        @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <section class="flex flex-col break-words text-center py-5 sticky">
            <h1>Juegos mas populares</h1>
            <div class="carousel slide carousel-fade container" id="mi-carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid " src="/images/carrusel/carrusel1.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>The Legend of Zelda: Breath of the Wild</h5>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img class="d-block w-100 img-fluid " src="/images/carrusel/carrusel2.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>The Witcher 3: Wild Hunt</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid " src="/images/carrusel/carrusel3.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Elden Ring</h5>
                        </div>
                    </div>

                </div>
                <!-- Controles -->
                <button class="carousel-control-prev" type="button" data-bs-target="#mi-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#mi-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>

                <!-- Indicadores -->
                <div class="carousel-indicators">
                    <button type="button" class="active" data-bs-target="#mi-carousel" data-bs-slide-to="0" aria-label="Slide 1"></button>
                    <button type="button" class="" data-bs-target="#mi-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" class="" data-bs-target="#mi-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>


            </div>

        </section>
    </div>
</main>
@endsection