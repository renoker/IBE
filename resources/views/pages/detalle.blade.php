@extends('layouts.main')
@section('title', 'IBE - Home')

@section('content')
    <div class="content_padre_catalogo">
        <div class="banner_general">
            <img src="{{ url('images/nosotros.jpg') }}" class="img_banner" alt="">
            <div class="content_inter_banner">
                <div class="part_one">
                    <h1 class="encabezado">Nuestro catálogo</h1>
                    <p class="text">En IBE SOLUTIONS ofrecemos el servicio de diseño y desarrollo de equipos para cualquier
                        sector industrial y grado alimenticio. Contamos con un extenso catálogo de productos, sin embargo,
                        en nuestra compañía contamos con el alcance para realizar diseños personalizados basados en las
                        necesidades y expectativas de nuestras partes interesadas.</p>
                </div>
                <div class="part_two">
                    <img src="{{ url('icons/Sello.png') }}" alt="">
                </div>
            </div>
        </div>
        {{-- Categoria --}}

    </div>
@endsection
