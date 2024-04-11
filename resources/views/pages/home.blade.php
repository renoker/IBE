@extends('layouts.main')
@section('title', 'IBE - Home')

@section('content')
    <div class="conten_padre">
        <div class="content_banner_slider">
            <img src="{{ url('images/nosotros.jpg') }}" class="img_banner" alt="">
            <div class="content_inter_banner">
                <div class="part_one">
                    <img src="{{ url('icons/logo_color.png') }}" class="logo" alt="">
                    <section class="splide" id="principal" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <h1 class="encabezado">Diseño</h1>
                                    <p class="text">Contamos con análisis y diseño de maquinaria industrial,
                                        agroindustrial y alimenticio
                                        basados en las normas de cumplimiento de cada giro; Integrando métodos de inocuidad,
                                        ergonomía e
                                        ingeniería en cada uno de nuestros equipos diseñados acorde a las necesidades de
                                        cada uno de
                                        nuestros clientes.</p>
                                    <a href="">
                                        Saber más <x-icons.arrowDerecha />
                                    </a>
                                </li>
                                <li class="splide__slide">
                                    <h1 class="encabezado">Automatización</h1>
                                    <p class="text">Sistemas de control y sistemas de procesos industriales, Integración y
                                        fabricación de centros de control de motores, ensamble de tableros eléctricos.</p>
                                </li>
                                <li class="splide__slide">
                                    <h1 class="encabezado">Fabricación</h1>
                                    <p class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation</p>
                                </li>
                                <li class="splide__slide">
                                    <h1 class="encabezado">Instalación electrica</h1>
                                    <p class="text">velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                        est laborum.</p>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="part_two">
                    <img src="{{ url('icons/prew.png') }}" id="btnPrev" alt="">
                    <img src="{{ url('icons/next.png') }}" id="btnNext" alt="">
                </div>
            </div>
        </div>
        <div class="content_full_image">
            <div class="box_ibe_integral">
                <div class="part_two">
                    <img src="{{ url('icons/logo_color_sin_fondo.png') }}" alt="">
                </div>
                <div class="part_one">
                    <h1 class="h1">IBE Integral Solutions</h1>
                    <p class="text"><span>Somos</span> una <span>empresa mexicana</span> dedicada a la Automatización,
                        instalación <br>
                        eléctrica de baja
                        y media tensión, fabricación de equipo, paneles de <br> control, proyectos llave en mano, <span>
                            diseño,
                            fabricación , mantenimiento y <br> comercialización</span> de equipos para procesos
                        alimenticios.</p>
                </div>
            </div>
            {{-- Nuestros Valores --}}
            <div class="box_general">
                <div class="content_certificaciones">
                    <div class="slider">
                        <h1 class="h1_h">Certificaciones</h1>
                        <div class="iso">
                            <p>ISO9001</p>
                        </div>
                        <p class="txt_slider">
                            Exige que nuestras fabricaciones cumplan con los <span>más altos estándares de calidad
                                e inocuidad</span> para garantizar y asegurar cada uno de los procesos en su planta
                        </p>
                        <a href="">
                            <div class="href">
                                <p class="p">Saber más</p>
                                <x-icons.arrowDerecha />
                            </div>
                        </a>
                    </div>
                    <div class="sellos">
                        <img src="{{ url('icons/sello_1.png') }}" class="img_sello" alt="">
                        <img src="{{ url('icons/sello_2.png') }}" class="img_sello" alt="">
                    </div>
                </div>
            </div>
            {{-- Barras --}}
            <div class="content_barra">
                <div class="item_barra">
                    <div class="part_one">
                        <div class="box_info">
                            <h1 class="h1">Nuestro catálogo</h1>
                            <p class="p"><span>IBE solutions</span> tiene un enfoque desde <span>líneas completas o
                                    complementos de maquinaria</span> , manufactura, innovación, diseño y ofrecemos
                                <span>mantenimiento asistido o remoto</span> a
                                toda clase de equipos nacionales o extranjeros para la industria agroalimentaria y en
                                general.
                            </p>
                            <a href="">
                                <div class="href_blanco">
                                    <p class="p_a">Saber más</p>
                                    <x-icons.arrowDerecha />
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="part_two">
                        <img src="{{ url('images/home_catalogo.jpg') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <img src="{{ url('images/home_catalogo_b.png') }}" class="img_slid" alt="">
                    </div>
                </div>
                {{-- Titulo --}}
                <h1 class="h1_encabezado">Maquinaria Agroindustrial</h1>
            </div>
            {{-- Maquinas --}}
            <div class="container_mquinaria">
                <div class="int">
                    @foreach ($list as $item)
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
                <div class="content_button_maquinas">
                    <button type="button">Ver todo <x-icons.arrowDerechaBig /></button>
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
                        <a href="">
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
                            <p class="text">Instalación de la <br> maquinaria, conexión <br> y componentes, <br>
                                programación,
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
                {{-- Mosaico --}}
                <div class="content_mosaico">
                    <img src="{{ url('images/IMG_1359.jpg') }}" alt="">
                    <img src="{{ url('images/IMG_7441.jpg') }}" alt="">
                    <img src="{{ url('images/IMG_4516.jpg') }}" alt="">
                    <img src="{{ url('images/IMG_9544.jpg') }}" alt="">
                </div>
                {{-- Barras --}}
                <div class="content_horizontal">
                    <h1 class="encabezado_servicios">Servicios</h1>
                    <div class="item_barra">
                        <div class="part_two">
                            <img src="{{ url('images/Rectangle_1.png') }}" alt="">
                        </div>
                        <div class="part_two_slider">
                            <img src="{{ url('images/Rectangle_b_1.png') }}" class="img_slid" alt="">
                        </div>
                        <div class="part_one">
                            <div class="box_info">
                                <h1 class="h1">Diseño</h1>
                                <p class="p">En IBE Solutions contamos con la capacidad de desarrollar diseños
                                    específicos personalizados basado en el cumplimiento del objetivo de nuestros clientes,
                                    bajo el cumplimiento de los mismos estándares de calidad.</p>
                                <a href="">
                                    <div class="href_blanco">
                                        <p class="p_a">Saber más</p>
                                        <x-icons.arrowDerechaBig />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item_barra mt-10">
                        <div class="part_one_l">
                            <div class="box_info">
                                <h1 class="h1">Fabricación</h1>
                                <p class="p">Realizamos el proceso de manufactura de inicio a final de cada una de la
                                    maquinaria diseñada, producimos piezas en serie realizadas con corte láser de alta
                                    precisión en aceros y aluminio.</p>
                                <a href="">
                                    <div class="href_blanco">
                                        <p class="p_a">Saber más</p>
                                        <x-icons.arrowDerechaBig />
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="part_two">
                            <img src="{{ url('images/Rectangle_2.png') }}" alt="">
                        </div>
                        <div class="part_two_slider">
                            <img src="{{ url('images/Rectangle_b_2.png') }}" class="img_slid" alt="">
                        </div>
                    </div>
                    <div class="item_barra mt-10">
                        <div class="part_two">
                            <img src="{{ url('images/Rectangle_3.png') }}" alt="">
                        </div>
                        <div class="part_two_slider">
                            <img src="{{ url('images/Rectangle_b_3.png') }}" class="img_slid" alt="">
                        </div>
                        <div class="part_one">
                            <div class="box_info">
                                <h1 class="h1">Automatización</h1>
                                <p class="p">Suministro, integración e instalación de tableros de control de motores;
                                    desarrollo, modificación y soporte a programación y Aplicación y desarrollo de la
                                    automatización a equipos.</p>
                                <a href="">
                                    <div class="href_blanco">
                                        <p class="p_a">Saber más</p>
                                        <x-icons.arrowDerechaBig />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item_barra mt-10">
                        <div class="part_one_l">
                            <div class="box_info">
                                <h1 class="h1">Mantenimiento</h1>
                                <p class="p"><span>Reparación, Mantenimiento preventivo</span> y Mantenimiento
                                    correctivo de equipo
                                    electrónico y electromecánico, Fabricación de equipo electromecánico. Duis aute irure
                                    dolor in rLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in rLorem ipsum dolor
                                    sit amet, consectetur adipiscing elit, sed do </p>
                                <a href="">
                                    <div class="href_blanco">
                                        <p class="p_a">Saber más</p>
                                        <x-icons.arrowDerechaBig />
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="part_two">
                            <img src="{{ url('images/Rectangle_4.png') }}" alt="">
                        </div>
                        <div class="part_two_slider">
                            <img src="{{ url('images/Rectangle_b_4.png') }}" class="img_slid" alt="">
                        </div>
                    </div>
                    <div class="item_barra mt-10">
                        <div class="part_two">
                            <img src="{{ url('images/Rectangle_5.png') }}" alt="">
                        </div>
                        <div class="part_two_slider">
                            <img src="{{ url('images/Rectangle_b_5.png') }}" class="img_slid" alt="">
                        </div>
                        <div class="part_one">
                            <div class="box_info">
                                <h1 class="h1">Servicios eléctricos industriales</h1>
                                <p class="p">Instalaciones de baja/media tensión, Mantenimiento preventivo y
                                    correctivo en baja/media tensión, Estudios de consumo de energía. Subestaciones
                                    eléctricas, Instalaciones de sistemas de iluminación, Instalación de sistemas de audio
                                    para voces de personal Mantenimiento correctivo de equipo electrónico y electromecánico
                                </p>
                                <a href="">
                                    <div class="href_blanco_s">
                                        <p class="p_a">Saber más</p>
                                        <x-icons.arrowDerechaBig />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- NUESTROS CLIENTES --}}
                <div class="content_nuestros_clientes">
                    <h1 class="encabezado_servicios">Nuestros Clientes</h1>
                    <section class="splide" id="nuestros_clientes" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img src="{{ url('icons/clientes/fresh.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('icons/clientes/Frutival.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('icons/clientes/sagroexport.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('icons/clientes/jonson_controls.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('icons/clientes/axis.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('icons/clientes/Motus.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('icons/clientes/texbel.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('icons/clientes/villita.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('icons/clientes/agroexport.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('icons/clientes/calavo.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('icons/clientes/Coliman1.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('icons/clientes/EASTMAN.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('icons/clientes/Evofrut.png') }}" alt="">
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('scripts')
    @vite('resources/js/home.js')
@endsection
