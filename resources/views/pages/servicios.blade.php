@extends('layouts.main')
@section('title', 'IBE - Home')

@section('content')
    <div class="content_padre_servicios">
        <div class="banner">
            <div class="content_inter_banner">
                <div class="part_one">
                    <h1 class="encabezado">Servicios</h1>
                    <p class="text">Contamos con una amlplia cartera de equipos y servicos totalmente dirigidos a la
                        agroindustria e industria en general, integrando cada una de nuestras especialidades para así lograr
                        el beneficio y productividad de la planta.</p>
                </div>
                <div class="part_two">
                    <img src="{{ url('icons/logo_border.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="contenedor_background_servicios">
            <div class="box_parallax">
                <div class="box">
                    <h1 class="h1">Diseño</h1>
                    <p class="parrafo pb"><span>Diseños de lineal</span> Maquinaria de línea, diseñados bajo los más altos
                        estándares de calidad,cumplimiento con las normas de inocuidad , ergonomía , sobretodo con un
                        enfoque basado en la mayor productividad ad y aprovechamiento de cada proceso.</p>
                    <p class="parrafo"><span>Diseños personalizados</span> Maquinaria de línea, diseñados bajo los más altos
                        estándares de calidad, cumplimiento con las normas de inocuidad, ergonomía, sobre todo con un
                        enfoque basado en la mayor productividad ad y aprovechamiento de cada proceso.</p>
                </div>
            </div>
            <div class="espaciador"></div>
            <div class="box_parallax">
                <div class="box">
                    <h1 class="h1">Fabricación</h1>
                    <p class="parrafo pb"><span>Fabricación de maquinaria:</span> Manufactura de inicio a final de cada una
                        de
                        la maquinaria diseñada</p>
                    <p class="parrafo"><span>Fabricación de piezas en serie:</span> Producimos piezas en serie realizadas
                        con corte láser de alta precisión en aceros y aluminio</p>
                </div>
            </div>
            <div class="espaciador"></div>
            <div class="box_parallax">
                <div class="box">
                    <h1 class="h1">Automatización</h1>
                    <p class="parrafo pb"><span>Tableros de control:</span> Suministro, integración e instalación de
                        tableros de control de motores</p>
                    <p class="parrafo pb"><span>Programación:</span> Desarrollo, modificación y soporte a programación</p>
                    <p class="parrafo"><span>Automatización:</span> Aplicación y desarrollo de la automatización a equipos
                    </p>
                </div>
            </div>
            <div class="espaciador"></div>
            <div class="box_parallax">
                <div class="box">
                    <h1 class="h1">Mantenimiento</h1>
                    <div class="bx">
                        <p class="parrafo"><span>Refurbish:</span></p>
                        <p class="parrafo">Reacondicionamiento de equipos nacionales e internacionales, integrando cada una
                            de nuestras especialidades <br>
                            Estructural Mecánica <br>
                            Eléctrica Automatización y control <br>
                            Servicio de mantenimiento preventivo y correctivo
                        </p>
                    </div>
                </div>
            </div>
            <div class="espaciador"></div>
            <div class="box_parallax">
                <div class="box">
                    <h1 class="h1">Servicios eléctricos industriales</h1>
                    <p class="parrafo pb"><span>Instalación eléctrica de media tensión:</span> Contamos con personal
                        capacitado para realizar instalaciones de media tensión</p>
                    <p class="parrafo pb"><span>Subestaciones pre ensambladas:</span> Fabricamos subestaciones
                        preensambladas tipo E-house clase 12,25 y 34,5 KV</p>
                    <p class="parrafo pb"><span>Instalación de subestaciones eléctricas:</span> Instalación de subestaciones
                        fijas 15,25 y 34,5 KV</p>
                    <p class="parrafo pb"><span>Instalación eléctrica de baja tensión:</span> Instalaciones eléctricas
                        industriales en baja tensión realizadas con estricto apego a la norma NOM –SEDE-001 2012 baja
                        tensión , circuitos de fuerza ,alumbrado y contactos, instalaciones de pararrayos y tierras físicas,
                        etc.</p>
                    <p class="parrafo pb"><span>Tableros CCM:</span> Fabricación e integración de tableros CCM(centros de
                        control de motores), troubleshooting, tableros a prueba de explosión, Fabricación de Tableros de
                        acero inoxidable NEMA 4R.</p>
                    <p class="parrafo pb"><span>Bancos de capacitores:</span> Diseño y fabricación de bancos de capacitores
                        para sistemas eléctricos parra corrección de bajo factor de potencia.</p>
                    <p class="parrafo pb"><span>Filtros de armónicos:</span> Instalación de filtros de armónicos pasivos y
                        activos</p>
                    <p class="parrafo pb"><span>Plantas de emergencia:</span> Suministro e instalación de plantas de
                        emergencia de hasta 3,250 kW.</p>
                    <div class="bx">
                        <p class="parrafo"><span>Cumplimiento de CÓDIGO RED:</span> Suministro e instalación de plantas de
                            emergencia de hasta 3,250 kW.</p>
                        <p class="parrafo">
                            Estudio de calidad <br>
                            Actualización o realización de diagrama unifilar <br>
                            Calculo de corto circuito en subestación y derivados <br>
                            Corrección o instalación de sistemas de protección contra descargas atmosféricas <br>
                            Revisión de distorsión de armónicos, estudios de tierras físicas. <br>
                            Fabricación e instalación de bancos de capacitores con o sin filtros de armónicos.
                        </p>
                    </div>
                    <p class="parrafo pb"><span>Sistemas contra incendios:</span> Instalación de tubería y accesorios contra
                        incendios</p>
                    <p class="parrafo pb"><span>Instalación de sistemas neumáticos:</span> Instalación de cuarto de
                        compresores, pulmón y secador.</p>
                    <p class="parrafo pb"><span>Sistema de protección atmosférica:</span> Sistema de protección atmosférica.
                    </p>
                    <p class="parrafo"><span>Sistemas de vigilancia CCTV:</span> Suministro e instalación de equipos de
                        vigilancia video.</p>
                </div>
            </div>
            <div class="espaciador"></div>
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
@endsection
