<header class="header">
    <div class="header_box">
        <ul>
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
            <li>
                <a href="" class="menu">
                    Servicios
                </a>
            </li>
            <li>
                <a href="" class="menu">
                    Contacto
                </a>
            </li>
            <li>
                <a href="" class="menu">
                    Redes
                </a>
            </li>
        </ul>
    </div>
</header>
