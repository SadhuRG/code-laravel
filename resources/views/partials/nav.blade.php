<style>
    /* Estilo adicional */
    .navbar-brand img {
        width: 28px;
        height: 28px;
        margin-right: 5px;
    }

    .navbar-nav .nav-link {
        color: #333;
    }

    .navbar-nav .nav-link:hover {
        color: #555;
    }

    .navbar-nav .nav-item.active .nav-link {
        color: red !important;
        text-decoration: underline;
    }

    .login-button {
        background-color: white;
        color: white;
        border-radius: 10px;
        border: 3px solid blue;
        padding: 4px 15px;
        transition: background-color 0.3s, color 0.3s;
    }

    .login-button:hover {
        background-color: white;
        color: white;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('imagenes/home-icon.png') }}" alt="Home Icon">
            INICIO
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ setActivo('inicio') }}">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item {{ setActivo('nosotros') }}">
                    <a class="nav-link" href="{{url('/nosotros')}}">Nosotros</a>
                </li>

                <li class="nav-item {{ setActivo('servicios') }}">
                    <a class="nav-link" href="{{url('/servicios')}}">Servicios</a>
                </li>

                <li class="nav-item {{ setActivo('contacto') }}">
                    <a class="nav-link" href="{{url('/contacto')}}">Contacto</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>

            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link login-button" href="{{ route('login') }}">INICIAR SESION</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link login-button" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">CERRAR SESION</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </ul>
        </div>
    </div>
</nav>
