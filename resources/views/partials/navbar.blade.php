<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href={{url('/')}}><span id="icono">&#9876;</span> ForoJuegos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    @if (Auth::check())
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul id=”button”>
            <li class="btn btn-secondary"><a href="{{ url('/foro') }}" style="color:white;">Foro</a></li>
            <li class="btn btn-secondary"><a href="{{ url('/foro/crearTema') }}" style="color:white;">Añadir Tema</a></li>
            <li class="btn btn-secondary"><a href="{{ url('/foro/perfil/'. Auth::user()->id ) }}" style="color:white;">Perfil</a></li>
            <li class="btn btn-secondary">
                <form action="{{ url('/logout') }}" method="POST" style="display:inline;" id="formSesion">
                    {{ csrf_field() }}
                    <button type="submit" class="btn" id="cerrarSesion">
                        Cerrar Sesión
                    </button>
                </form>
            </li>
            <form method="GET" action="{{url('/foro/buscar')}}" style="float:right;" class="form-inline my-2 my-lg-0">
                <input name="tema" style="margin-top:8px;" class="form-control mr-sm-2" type="search" placeholder="Buscar Tema">
                <button style="margin-top:10px;" class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </ul>
    </div>
    @else
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul id=”button”>
            <li class="btn btn-secondary"><a href="{{ url('/foro') }}" style="color:white;">Foro</a></li>
            <li class="btn btn-secondary"><a href="{{ url('/login') }}" style="color:white;">Iniciar Sesión</a></li>
            <li class="btn btn-secondary"><a href="{{ url('/register') }}" style="color:white;">Registrarse</a></li>
        </ul>
    </div>
    @endif
</nav>
<!-- Pruebas 

    NavBar Con LogIn
<div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" id="lista1">
            <li class="nav-item active">
                <form action="{{ url('/foro') }}" method="GET" style="display:inline">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-secondary nav-link" style="display:inline;cursor:pointer">
                        Foro
                    </button>
                </form>
            </li>
            <li class="nav-item">
                <form action="{{ url('/foro/crearTema') }}" method="GET" style="display:inline">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-secondary nav-link" style="display:inline;cursor:pointer">
                        Añadir Tema
                    </button>
                </form>
            </li>
            <li class="nav-item">
                <form action="{{ url('/foro/perfil/' ) }}" method="GET" style="display:inline">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-secondary nav-link" style="display:inline;cursor:pointer">
                        Perfil
                    </button>
                </form>
            </li>
            <li class="nav-item">
                <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-secondary nav-link" style="display:inline;cursor:pointer">
                        Cerrar Sesión
                    </button>
                </form>
            </li>
        </ul>
    </div>

    Navbar Sin LogIn
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto row" id="lista2">
            <li class="nav-item active">
                <form class="col" action="{{ url('/foro') }}" method="GET" style="display:inline">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-secondary nav-link" style="display:inline;cursor:pointer">
                        Foro
                    </button>
                </form>
            </li>
            <li class="nav-item">
                <form class="col" action="{{ url('/login') }}" method="GET" style="display:inline">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-secondary nav-link" style="display:inline;cursor:pointer">
                        Iniciar Sesión
                    </button>
                </form>
            </li>
            <li class="nav-item">
                <form action="{{ url('/register') }}" method="GET" style="display:inline">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-secondary nav-link" style="display:inline;cursor:pointer">
                        Registrarse
                    </button>
                </form>
            </li>
        </ul>
    </div>
-->