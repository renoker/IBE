@extends('layouts.main')
@section('title', 'IBE - Nosotros')

@section('content')
    <div class="conten_padre">
        <div class="banner_general">
            <img src="{{ url('images/nosotros.jpg') }}" class="img_banner" alt="">
            <div class="content_inter_banner">
                <div class="part_one">
                    <h1 class="encabezado">Nosotros</h1>
                    <p class="text">Integra IBE group la cual ha sido dirigida por más de 47 años, al frente del Ing. Jorge
                        Islas Bustamante M. Empresa mexicana dedicada al diseño, fabricación, mantenimiento,
                        comercialización de equipos para procesos alimenticios, automatización, instalación eléctrica de
                        baja y media tensión, fabricación de equipo, paneles de control, proyectos llave en mano.</p>
                </div>
                <div class="part_two">
                    <img src="{{ url('icons/Sello.png') }}" alt="">
                </div>
            </div>
        </div>
        {{-- Nuestros Valores --}}
        <div class="box_general">
            <h1 class="h1">Nuestros Valores</h1>
            <div class="box_cuadros">
                <div class="cuadro">
                    <div class="int">
                        <img src="{{ url('icons/nosotros_icon_1.png') }}" alt="">
                        <p class="info">¡Cumplir con su expectativas y más, siempre a la primera!</p>
                    </div>
                </div>
                <div class="cuadro">
                    <div class="int">
                        <img src="{{ url('icons/nosotros_icon_2.png') }}" alt="">
                        <p class="info">Siempre ser constantes hasta lograr el objetivo</p>
                    </div>
                </div>
                <div class="cuadro">
                    <div class="int">
                        <img src="{{ url('icons/nosotros_icon_3.png') }}" alt="">
                        <p class="info">Trabajar hombro con hombro</p>
                    </div>
                </div>
                <div class="cuadro">
                    <div class="int">
                        <img src="{{ url('icons/nosotros_icon_4.png') }}" alt="">
                        <p class="info">Consciencia de la importancia con metas y expectativas de nuestras partes
                            interesadas</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- Nuestros Valores --}}
        <div class="box_general">
            <h1 class="h1">Certificaciones</h1>
            <div class="content_slider">
                <div class="slider">
                    <section class="splide" id="certificaciones" aria-label="Certificaciones">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <p class="txt_slider">
                                        Contamos con certificado IQNET relacionada con la red de certificación más grande,
                                        creíble y confiable del mundo y tendrán sus datos presentes en la base de datos
                                        internacional de empresas certificadas evaluadas como proveedores mundialmente
                                        reconocidos.
                                    </p>
                                </li>
                                <li class="splide__slide">
                                    <p class="txt_slider">
                                        Nuestra certificación ISO 9001:2015 refuerza y asegura la calidad de los servicios y
                                        productos que ofrecemos a nuestras partes interesadas cumpliendo con cada uno de los
                                        estándares más altos de calidad de cada uno de nuestros procesos
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="sellos">
                    <img src="{{ url('icons/sello_1.png') }}" class="img_sello" alt="">
                    <img src="{{ url('icons/sello_2.png') }}" class="img_sello" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- Imagenes --}}
    <div class="box_imagenes">
        <div class="content_imagen_zoom">
            <img src="{{ url('images/soldador.png') }}" class="zoom" alt="">
        </div>
        <div class="content_imagen_zoom">
            <img src="{{ url('images/maquina.png') }}" class="zoom" alt="">
        </div>
        <div class="content_imagen_zoom">
            <img src="{{ url('images/hombre.png') }}" class="zoom" alt="">
        </div>
        <div class="content_imagen_zoom">
            <img src="{{ url('images/trabajando.png') }}" class="zoom" alt="">
        </div>
    </div>
    {{-- Certificaciones slider --}}
    <div class="box_certificaciones_slider">
        <section class="splide" id="certificaciones_cuentas" aria-label="Certificaciones">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="box_cuentas">
                            <div class="cuenta">
                                <img src="{{ url('images/cuenta_1.jpg') }}" class="img" alt="">
                                <p class="txt_s">Planificación Avanzada de la Calidad del Producto (Advanced Product
                                    Quality Planning) consiste en el marco de técnicas utilizadas para el desarrollo exitoso
                                    y eficiente de productos en la industria</p>
                            </div>
                            <div class="cuenta">
                                <img src="{{ url('images/cuenta_2.jpg') }}" class="img" alt="">
                                <p class="txt_s">Conocemos y aplicamos técnicas suizas para el proceso de acabados en acero
                                    inoxidable.</p>
                            </div>
                            <div class="cuenta">
                                <img src="{{ url('images/cuenta_3.jpg') }}" class="img" alt="">
                                <p class="txt_s">En IBE se practica la disciplina BPM la cual tiene el enfoque en mejorar
                                    los resultados de rendimiento empresarial basado en diseño, modelo, ejecución,
                                    automatización, medición, control y optimización de nuestros procesos.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="box_cuentas">
                            <div class="cuenta">
                                <img src="{{ url('images/cuenta_4.png') }}" class="img_1" alt="">
                                <p class="txt_s">Conocimientos en técnicas de dobles para aceros especiales.</p>
                            </div>
                            <div class="cuenta">
                                <img src="{{ url('images/cuenta_5.png') }}" class="img" alt="">
                                <p class="txt_s">Contamos con personal capacitado para la implementación de auditorias
                                    internas para asegurarnos de que cada uno de nuestros procesos aplicados cumplan con sus
                                    estándares de calidad.</p>
                            </div>
                            <div class="cuenta">
                                <img src="{{ url('images/cuenta_6.png') }}" alt="">
                                <p class="txt_s">Especialistas en operación de maquinaria corte láser de alta precisión
                                    para asegurar la integridad y exactitud de cada uno de nuestros procesos de corte.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="box_cuentas_slider">
                            <div class="cuenta">
                                <img src="{{ url('images/cuenta_7.png') }}" class="img" alt="">
                                <p class="txt_s">Capacitados para realizar diseños tomando en cuenta la importancia de la
                                    ergonomía en los centros de trabajo.</p>
                            </div>
                            <div class="cuenta">
                                <img src="{{ url('images/cuenta_8.png') }}" class="img" alt="">
                                <p class="txt_s">En IBE estamos capacitados en inocuidad alimentaria para cubrir con todas
                                    las necesidades y expectativas de los sectores agroindustriales y alimenticios.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    {{-- Contacto --}}
    <div class="content_contacto">
        <img src="{{ url('images/back_contacto.jpg') }}" class="iamgen_fondo" alt="">
        <div class="opacidad">
            <div class="content_contacto">
                <h1 class="h1">Contáctanos</h1>
                <p class="p">Gracias por visitarnos, si requieres preguntar por alguno de nuestros productos o
                    servicios contáctanos por medio de nuestros números telefónicos, correos o redes sociales, te
                    responderemos de inmediato.</p>
                <form action="{{ route('contact.store') }}" method="post">
                    @method('POST')
                    @csrf
                    <div class="box_input">
                        <div class="icon_input">
                            <img src="{{ url('icons/user.png') }}" alt="">
                        </div>
                        <input type="text" placeholder="Nombre" name="name">
                    </div>
                    <div class="box_input mt-15">
                        <div class="icon_input">
                            <img src="{{ url('icons/ping.png') }}" alt="">
                        </div>
                        <input type="text" placeholder="Compañia" name="company">
                    </div>
                    <div class="box_input mt-15">
                        <div class="icon_input">
                            <img src="{{ url('icons/cel.png') }}" alt="">
                        </div>
                        <input type="tel" placeholder="Teléfono" name="phone">
                    </div>
                    <div class="box_input mt-15">
                        <div class="icon_input">
                            <img src="{{ url('icons/cartita.png') }}" alt="">
                        </div>
                        <input type="email" placeholder="Correo" name="email">
                    </div>
                    <div class="box_input mt-15">
                        <textarea name="message" id="" cols="30" rows="5" class="textarea" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="content_button_footer_send">
                        <button type="submit">Envíar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/nosotros.js')
@endsection
