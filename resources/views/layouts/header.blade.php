<header class="header">
    <div class="header_box">
        <ul class="ul">
            <li class="@if (Route::currentRouteName() == 'nosotros.index') active @endif">
                <a href="{{ route('nosotros.index') }}" class="menu">
                    Nosotros
                </a>
            </li>
            <li class="@if (Route::currentRouteName() == 'turnkey.index') active @endif">
                <a href="{{ route('turnkey.index') }}" class="menu">
                    Turnkey
                </a>
            </li>
            <li class="@if (Route::currentRouteName() == 'directory.index') active @endif">
                <a href="{{ route('directory.index') }}" class="menu">
                    Catálogo
                </a>
            </li>
            <li>
                <a href="{{ route('home.index') }}">
                    <div class="logo"></div>
                </a>
            </li>
            <li class="@if (Route::currentRouteName() == 'servicios.index') active @endif">
                <a href="{{ route('servicios.index') }}" class="menu">
                    Servicios
                </a>
            </li>
            <li class="@if (Route::currentRouteName() == 'contacto.index') active @endif">
                <a href="{{ route('contacto.index') }}" class="menu">
                    Contacto
                </a>
            </li>
            <li class="relative_li" id="btn_redes">
                <a class="menu">
                    Redes
                </a>
                <div class="cnt_redes" id="redes">
                    <ul class="ul">
                        <li class="red_social">
                            <a href="">LinkedIn</a>
                        </li>
                        <li class="red_social">
                            <a href="">Facebook</a>
                        </li>
                        <li class="red_social">
                            <a href="">Instagram</a>
                        </li>
                        <li class="red_social">
                            <a href="">X</a>
                        </li>
                        <li class="red_social">
                            <a href="">TikTok</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</header>
