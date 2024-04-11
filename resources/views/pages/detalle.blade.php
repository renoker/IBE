@extends('layouts.main')
@section('title', 'IBE - Home')

@section('popups')
    <div id="popup">
        <div class="opacity" id="closePopUp">
            <div class="content_contacto">
                <h1 class="h1">Cuestionario</h1>
                <p class="p">En IBE Solutions queremos ser un auxiliar primordial para el desarrollo de su empresa.
                    compártenos tus datos de contacto y un asesor se comunicará contigo.</p>
                <form action="" method="post">
                    <div class="box_input">
                        <div class="icon_input">
                            <img src="{{ url('icons/user.png') }}" alt="">
                        </div>
                        <input type="text" placeholder="Nombre">
                    </div>
                    <div class="box_input mt-15">
                        <div class="icon_input">
                            <img src="{{ url('icons/ping.png') }}" alt="">
                        </div>
                        <input type="text" placeholder="Compañia">
                    </div>
                    <div class="box_input mt-15">
                        <div class="icon_input">
                            <img src="{{ url('icons/cel.png') }}" alt="">
                        </div>
                        <input type="tel" placeholder="Teléfono">
                    </div>
                    <div class="box_input mt-15">
                        <div class="icon_input">
                            <img src="{{ url('icons/cartita.png') }}" alt="">
                        </div>
                        <input type="email" placeholder="Correo">
                    </div>
                    <div class="box_input mt-15">
                        <textarea name="" id="" cols="30" rows="5" class="textarea" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="content_button_footer_send">
                        <button type="submit">Envíar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content_padre_catalogo">
        <div class="banner_general">
            <img src="{{ url('images/nosotros.jpg') }}" class="img_banner" alt="">
            <div class="content_inter_banner">
                <div class="part_one">
                    <h1 class="encabezado">Nuestro catálogo</h1>
                    <p class="text">En IBE SOLUTIONS ofrecemos el servicio de diseño y desarrollo de equipos para
                        cualquier
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

        <div class="content_padre_detalle_catologo" id="detalle_maquina">
            <div class="conteiner_detalle_categoria">
                <div class="left">
                    <h1 class="h1">{{ $row->name }}</h1>
                    <div class="box_model">
                        <h6 class="h6">Modelo: </h6>
                        <div class="iso">
                            <p>{{ $row->model }}</p>
                        </div>
                    </div>
                    <h1 class="encabezado">Especificaciones</h1>
                    <h6 class="h6_g">Fabricación:</h6>
                    <p class="parrafo">{{ $row->fabricacion }}</p>
                    <h6 class="h6_g">Capacidad:</h6>
                    <p class="parrafo">{{ $row->capacidad }}</p>
                    <h6 class="h6_g">Componentes y transmición:</h6>
                    <p class="parrafo">{{ $row->componentes }}</p>
                    <h6 class="h6_g">Objetivo</h6>
                    <p class="parrafo pb">{{ $row->objetivo }}</p>
                    <div class="content_frutas">
                        @foreach ($frutas as $item)
                            <div class="item">
                                <img src="{{ url($item->image) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="right">
                    <div class="content_img_maquina">
                        <img src="{{ url($row->image) }}" alt="">
                    </div>
                    <div class="contenedor_botones_detalle">
                        <button type="button" class="btn_large" id="openPopUp">Cotizar</button>
                        <div class="cont_slider_buttons">
                            <input type="hidden" value="{{ $row->id }}" id="posicion">
                            <button type="button" class="btn_large" id="prew"><x-icons.arrowIzq /> Anterior</button>
                            <button type="button" class="btn_large" id="next">Siguiente
                                <x-icons.arrowDerechaBig /></button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Productos relacionados --}}
            <div class="conteiner_productos_relacionados">
                <h1 class="h1_g">Productos realcionados</h1>
                <div class="box_relacionados">
                    @foreach ($relacionados as $item)
                        <div class="item_m">
                            <img src="{{ url($item->image) }}" alt="">
                        </div>
                    @endforeach
                </div>
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
@endsection

@section('scripts')
    @vite('resources/js/detalle.js')
@endsection
