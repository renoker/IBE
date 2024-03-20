@extends('layouts.main')
@section('title', 'IBE - Nosotros')

@section('content')
    <div class="conten_padre">
        <div class="banner_general">
            <img src="{{ url('images/turnkey.jpg') }}" class="img_banner" alt="">
            <div class="content_inter_banner">
                <div class="part_one">
                    <h1 class="encabezado">Turnkey</h1>
                    <p class="text">En IBE contamos con nuestro servicio integral más completo “Turnkey contract” en el que
                        integramos cada una de nuestras especialidades, para poner en marcha cualquier planta, desde: obra
                        civil, Instalación eléctrica (alta,media, baja tensión),instalación de máquinas, programación de
                        componentes, sistemas neumáticos e hidráulicos, hasta hacer entrega y puesta en marcha.</p>
                </div>
                <div class="part_two">
                    <img src="{{ url('icons/Sello.png') }}" alt="">
                </div>
            </div>
        </div>
        {{-- Banner --}}
        <div class="box_banner_azul">
            <div class="content_banner_azul">
                <div class="part_one">
                    <h1 class="h1">Nuestro proceso</h1>
                    <p class="text">
                        <span>IBE Integral Solutions</span> cuenta con la infraestructura y alcances para
                        <span>fabricar, desarrollar</span>
                        e <span>instalar</span> equipos que sean eficientes en cualquier proceso que su empresa requiera,
                        contamos con
                        nuestro servicio integral mas completo <span>“Llave en mano”</span> o <span>“Turnkey
                            contract”</span>
                        <br>
                        Queremos ser su mejor opción
                        para asegurar cada uno de sus procesos, tomando en cuenta; calidad, producción, competitividad y
                        satisfacción.
                    </p>
                </div>
                <div class="part_two">
                    <img src="{{ url('icons/hand_key.png') }}" alt="">
                </div>
            </div>
            {{-- Iconos --}}
            <div class="content_icons_info">
                <div class="inter">
                    <div class="item">
                        <div class="icon_1"></div>
                        <h6 class="h6">Obra Civil</h6>
                        <p class="text">Preparación de la nave desde los cimientos, obra civil, etc.</p>
                    </div>
                    <div class="item">
                        <div class="icon_2"></div>
                        <h6 class="h6">Diseño y fabricación<br></h6>
                        <p class="text">Fabricación de <br> equipos.</p>
                    </div>
                    <div class="item">
                        <div class="icon_3"></div>
                        <h6 class="h6">Instalación <br> eléctrica</h6>
                        <p class="text">Instalación base “Instalación eléctrica” (alta, media, baja <br> tensión)
                            tuberías, <br>
                            charolas, etc..</p>
                    </div>
                    <div class="item">
                        <div class="icon_4"></div>
                        <h6 class="h6">Automatización</h6>
                        <p class="text">Automatización y <br> control de equipos.</p>
                    </div>
                    <div class="item">
                        <div class="icon_5"></div>
                        <h6 class="h6">Distribución <br> de planta</h6>
                        <p class="text">Diseño de maquinaria <br> y distribución de <br> planta.</p>
                    </div>
                    <div class="item">
                        <div class="icon_6"></div>
                        <h6 class="h6">Instalación <br> de maquinaria</h6>
                        <p class="text">Instalación de la <br> maquinaria, conexión <br> y componentes, <br> programación,
                            <br> hidráulica,
                            etc.
                        </p>
                    </div>
                    <div class="item">
                        <div class="icon_7"></div>
                        <h6 class="h6">Puesta en <br> marcha</h6>
                        <p class="text">Puesta en marcha <br> y en pleno <br> funcionamiento.</p>
                    </div>
                    <div class="item">
                        <div class="icon_8"></div>
                        <h6 class="h6">Capacitación <br> de personal</h6>
                        <p class="text">Capacitación a <br> personal asignado <br> para la operación.</p>
                    </div>
                </div>
            </div>
            {{-- Barras --}}
            <div class="content_barras">
                <div class="item_barra">
                    <div class="part_one">
                        <div class="box_img">
                            <img src="{{ url('icons/icon_b_1.png') }}" alt="">
                        </div>
                        <div class="box_info">
                            <h1 class="h1">Obra Civil</h1>
                            <p class="p">Revision y factivilidad de area, estudio de impacto ambiental,trazo de terreno
                                con referencias topograficas,diseño de obra. desplazamiento natural de terreno y
                                construcción genaral.</p>
                        </div>
                    </div>
                    <div class="part_two">
                        <img src="{{ url('images/barra_1.png') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <section class="splide" id="barra_1" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_1.jpg') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_2.jpg') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_3.jpg') }}" class="img_slid" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                {{-- Slider DOS --}}
                <div class="item_barra mt-10">
                    <div class="part_two">
                        <img src="{{ url('images/barra_2.jpg') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <section class="splide" id="barra_2" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_1.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_2.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_3.png') }}" class="img_slid" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="part_one_r">
                        <div class="box_info">
                            <h1 class="h1">Fabricacion de Maquinaria</h1>
                            <p class="p">Incluye estudio de factibilidad con suministrador de energía, bases de
                                diseño, transición areo-subterraneo, media tensión, líneas de media tensión a subestación
                                eléctrica, diagrama unifilar de media tensión. Baja tensión, diagramas, cuadros de carga,
                                iluminación y contactos en nave, domótica, sistema de tierras físicas, SPDA, sistema de
                                emergencias y catálogo de conceptos.</p>
                        </div>
                        <div class="box_img">
                            <img src="{{ url('icons/icon_b_2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- Slider TRES --}}
                <div class="item_barra mt-10">
                    <div class="part_one">
                        <div class="box_img">
                            <img src="{{ url('icons/icon_b_3.png') }}" alt="">
                        </div>
                        <div class="box_info">
                            <h1 class="h1">Instalación Eléctrica</h1>
                            <p class="p">Incluye estudio de factibilidad con suministrador de energía, bases de
                                diseño, transición areo-subterraneo, media tensión, líneas de media tensión a subestación
                                eléctrica, diagrama unifilar de media tensión. Baja tensión, diagramas, cuadros de carga,
                                iluminación y contactos en nave, domótica, sistema de tierras físicas, SPDA, sistema de
                                emergencias y catálogo de conceptos.</p>
                        </div>
                    </div>
                    <div class="part_two">
                        <img src="{{ url('images/barra_1.png') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <section class="splide" id="barra_3" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_1.jpg') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_2.jpg') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_3.jpg') }}" class="img_slid" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                {{-- Slider CUATRO --}}
                <div class="item_barra mt-10">
                    <div class="part_two">
                        <img src="{{ url('images/barra_4.png') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <section class="splide" id="barra_4" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_d_4.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_2.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_3.png') }}" class="img_slid" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="part_one_r">
                        <div class="box_info">
                            <h1 class="h1">Automatización</h1>
                            <p class="p">Automatización línea de proceso integrando cada uno de las maquinas, siendo
                                programadas para eficientar el resultado final</p>
                        </div>
                        <div class="box_img">
                            <img src="{{ url('icons/icon_b_4.png') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- Slider CINCO --}}
                <div class="item_barra mt-10">
                    <div class="part_one">
                        <div class="box_img">
                            <img src="{{ url('icons/icon_b_5.png') }}" alt="">
                        </div>
                        <div class="box_info">
                            <h1 class="h1">Distribución de planta</h1>
                            <p class="p">Diseño y flujo de proceso desde la recepción, hasta el empaque final tomando
                                e cuenta las dimensiones con las que cueste el cliente y así mismo distribuirlas áreas.</p>
                        </div>
                    </div>
                    <div class="part_two">
                        <img src="{{ url('images/barra_1.png') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <section class="splide" id="barra_5" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_1.jpg') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_2.jpg') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_3.jpg') }}" class="img_slid" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                {{-- Slider SEIS --}}
                <div class="item_barra mt-10">
                    <div class="part_two">
                        <img src="{{ url('images/barra_6.png') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <section class="splide" id="barra_6" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_d_4.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_2.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_3.png') }}" class="img_slid" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="part_one_r">
                        <div class="box_info">
                            <h1 class="h1">Instalación de <br> Maquinaria</h1>
                            <p class="p">Innstalación de toda la línea de proceso y perifericos.</p>
                        </div>
                        <div class="box_img">
                            <img src="{{ url('icons/icon_b_6.png') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- Slider SIETE --}}
                <div class="item_barra mt-10">
                    <div class="part_one">
                        <div class="box_img">
                            <img src="{{ url('icons/icon_b_7.png') }}" alt="">
                        </div>
                        <div class="box_info">
                            <h1 class="h1">Puesta Marcha</h1>
                            <p class="p">Pruebas de funcionamiento mecánico, neumático, eléctrico y control.</p>
                        </div>
                    </div>
                    <div class="part_two">
                        <img src="{{ url('images/barra_7.png') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <section class="splide" id="barra_7" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_e_7.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_2.jpg') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_3.jpg') }}" class="img_slid" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                {{-- Slider OCHO --}}
                <div class="item_barra mt-10">
                    <div class="part_two">
                        <img src="{{ url('images/barra_8.png') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <section class="splide" id="barra_8" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_d_4.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_2.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_3.png') }}" class="img_slid" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="part_one_r">
                        <div class="box_info">
                            <h1 class="h1">Capacitación de personal</h1>
                            <p class="p">Capacitación de la operación de la línea personalizadas por nuestro equipo
                                especializado IBE para cada etapa de el proceso.</p>
                        </div>
                        <div class="box_img">
                            <img src="{{ url('icons/icon_b_8.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            {{-- Nuestros Valores --}}
            <div class="box_general mt-10">
                <div class="content_slider">
                    <div class="slider">
                        <section class="splide" id="certificaciones" aria-label="Certificaciones">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <p class="txt_slider">
                                            Contamos con certificado IQNET relacionada con la red de certificación más
                                            grande, creíble y confiable del mundo y tendrán sus datos presentes en la base
                                            de datos internacional de empresas certificadas evaluadas como proveedores
                                            mundialmente reconocidos.
                                        </p>
                                    </li>
                                    <li class="splide__slide">
                                        <p class="txt_slider">
                                            Nuestra certificación ISO 9001:2015 refuerza y asegura la calidad de los
                                            servicios y
                                            productos que ofrecemos a nuestras partes interesadas cumpliendo con cada uno de
                                            los
                                            estándares más altos de calidad de cada uno de nuestros procesos
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="sellos">
                        <img src="{{ url('icons/sello_3.png') }}" class="img_sello" alt="">
                        <img src="{{ url('icons/sello_4.png') }}" class="img_sello" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    @vite('resources/js/turnkey.js')
@endsection
