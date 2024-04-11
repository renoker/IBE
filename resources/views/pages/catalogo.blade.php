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
        <div class="conteiner_categoria">
            <h1 class="h1_categoria">Categorias</h1>
            <ul class="ul_cat">
                <li class="li">
                    <div class="cat">
                        <p class="p">Tolvas</p>
                    </div>
                </li>
                <li class="li">
                    <div class="cat">
                        <p class="p">Transportadoras</p>
                    </div>
                </li>
                <li class="li">
                    <div class="cat">
                        <p class="p">Volteadoras</p>
                    </div>
                </li>
                <li class="li">
                    <div class="cat">
                        <p class="p">Extractoras</p>
                    </div>
                </li>
                <li class="li">
                    <div class="cat">
                        <p class="p">Mesas</p>
                    </div>
                </li>
                <li class="li">
                    <div class="cat">
                        <p class="p">Bombas</p>
                    </div>
                </li>
                <li class="li">
                    <div class="cat">
                        <p class="p">Otros</p>
                    </div>
                </li>
            </ul>
            {{-- Listado de maquinas --}}
            <div class="container_maquinas">
                <div class="int">
                    @foreach ($maquinas as $item)
                        <div class="box_maquina">
                            <img src="{{ url($item->image) }}" alt="">
                            <h1 class="h1">{{ $item->name }}</h1>
                            <div class="iso">
                                <p>{{ $item->model }}</p>
                            </div>
                            <p class="txt_slider">
                                {{ $item->objetivo }}
                            </p>
                            <a href="{{ route('directory.show', $item) }}">
                                <div class="hre">
                                    <p class="p">Saber más</p>
                                    <x-icons.arrowDerecha />
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                {{ $maquinas->links() }}
                <div class="pagination">
                    <button class="btn_pagination">Anterior</button>
                    <ul class="numeros_p">
                        <li class="num">1</li>
                        <li class="num">2</li>
                        <li class="num">3</li>
                        <li class="num">4</li>
                    </ul>
                    <button class="btn_pagination">Siguiente</button>
                </div>
                <div class="content_banner_azul">
                    <div class="part_one">
                        <div class="b">
                            <h1 class="h1">Nuestro proceso de fabricación</h1>
                            <div class="box_amarillo">
                                <p>Turnkey</p>
                            </div>
                        </div>
                        <p class="text">
                            El proyecto más integral que tenemos, ya que el proyecto "llave en mano" o "turnkey contract"
                            integra todas nuestras especialidades para la puesta en marcha de una planta en un tiempo
                            determinado, incluye:
                        </p>
                        <a href="{{ route('turnkey.index') }}">
                            <div class="href_blanco">
                                <p class="p_a">Saber más</p>
                                <x-icons.arrowDerecha />
                            </div>
                        </a>
                    </div>
                    <div class="part_two">
                        <img src="{{ url('icons/hand_key.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
