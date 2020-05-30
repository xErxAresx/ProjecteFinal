<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href={{url('/')}}><span id="icono">&#9876;</span> ForoJuegos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    @if (Auth::check())
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul id=”button”>
            <li class="botonNavbar btn btn-secondary">
                <svg class="bi bi-house-door" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
                    <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                </svg> 
                <a id="botonForo" href="{{ url('/foro') }}" style="color:white;">Foro</a>
            </li>
            <li class="botonNavbar btn btn-secondary">
                    <svg class="bi bi-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                        <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                      </svg>
                 <a id="botonCrear" href="{{ url('/foro/crearTema') }}" style="color:white;">Añadir Tema</a>
            </li>
            <li class="botonNavbar btn btn-secondary">
                    <svg class="bi bi-person-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                        <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                      </svg>
                 <a id="botonPerfil" href="{{ url('/foro/perfil/'. Auth::user()->id ) }}" style="color:white;">Perfil</a>
            </li>
            <li class="botonNavbar btn btn-secondary">
            <form action="{{ url('/logout') }}" method="POST" style="display:inline;" id="formSesion">
                    {{ csrf_field() }}
                    <button type="submit" class="btn" id="cerrarSesion">
                        Cerrar Sesión
                    </button>
                </form>
            </li>
            <form id="formBuscador" method="POST" action="{{url('/foro/buscar')}}" class="form-inline my-2 my-lg-0">
                <input id="barraBuscador" name="tema" style="margin-top:8px;" class="form-control mr-sm-2" type="search" placeholder="Buscar Tema">
                <button id="botonBuscar" style="margin-top:10px;" class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </ul>
    </div>
    @else
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul id=”button”>
            <li class="botonNavbar btn btn-secondary">
                    <svg class="bi bi-house-door" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
                        <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                      </svg> 
                <a id="botonForo" href="{{ url('/foro') }}" style="color:white;">Foro</a></li>
            <li class="botonNavbar btn btn-secondary">
                    <svg class="bi bi-pen" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.707 13.707a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391L10.086 2.5a2 2 0 0 1 2.828 0l.586.586a2 2 0 0 1 0 2.828l-7.793 7.793zM3 11l7.793-7.793a1 1 0 0 1 1.414 0l.586.586a1 1 0 0 1 0 1.414L5 13l-3 1 1-3z"/>
                        <path fill-rule="evenodd" d="M9.854 2.56a.5.5 0 0 0-.708 0L5.854 5.855a.5.5 0 0 1-.708-.708L8.44 1.854a1.5 1.5 0 0 1 2.122 0l.293.292a.5.5 0 0 1-.707.708l-.293-.293z"/>
                        <path d="M13.293 1.207a1 1 0 0 1 1.414 0l.03.03a1 1 0 0 1 .03 1.383L13.5 4 12 2.5l1.293-1.293z"/>
                      </svg>
                
                <a id="botonIniciar" href="{{ url('/login') }}" style="color:white;">Iniciar Sesión</a>
            </li>
            <li class="botonNavbar btn btn-secondary">
                    <svg class="bi bi-person-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM1.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM6 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm4.5 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        <path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
                      </svg>
                <a id="registrarse" href="{{ url('/register') }}" style="color:white;">Registrarse</a></li>
        </ul>
    </div>
    @endif
</nav>
<!-- Antiguo NavBar

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