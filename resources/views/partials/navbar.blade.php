<div class="navbar navbar-expand-lg" id="principal">
    <div class="container">
        
        <a class="navbar-brand btn btn-secondary" href="{{url('/')}}" id="linkLogo"><span id="icono">&#9876;</span> ForoJuegos </a>

                
                <div class="navbar-nav">
                @if( Auth::check() )
                    <div style="display:inline-block; margin-right: 2em;">
                            <form action="{{ url('/foro') }}" method="GET" style="display:inline">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-secondary nav-link" style="display:inline;cursor:pointer">
                                    Foro
                                </button>
                            </form>
                        </div>
                        <div style="display:inline-block; margin-right: 2em;">
                            <form action="{{ url('/foro/crearTema') }}" method="GET" style="display:inline">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-secondary nav-link" style="display:inline;cursor:pointer">
                                    Añadir Tema
                                </button>
                            </form>
                        </div>
                        <div style="display:inline-block; margin-right: 2em;">
                            <form action="{{ url('/foro/perfil/'. Auth::user()->id ) }}" method="GET" style="display:inline">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-secondary nav-link" style="display:inline;cursor:pointer">
                                    Perfil
                                </button>
                            </form>
                        </div>
                        <div style="display:inline-block; margin-right: 2em;">
                            <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-secondary nav-link" style="display:inline;cursor:pointer">
                                    Cerrar Sesión
                                </button>
                            </form>
                        </div>
                        
                        
                @else
                <div style="display:inline-block; margin-right: 2em;">
                            <form action="{{ url('/foro') }}" method="GET" style="display:inline">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-secondary nav-link" style="display:inline;cursor:pointer">
                                    Foro
                                </button>
                            </form>
                        </div>

                        <div style="display:inline-block; margin-right: 2em;">
                            <form action="{{ url('/login') }}" method="GET" style="display:inline">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-secondary nav-link" style="display:inline;cursor:pointer">
                                    Iniciar Sesión
                                </button>
                            </form>
                        </div>

                        <div style="display:inline-block; margin-right: 2em;">
                            <form action="{{ url('/register') }}" method="GET" style="display:inline">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-secondary nav-link" style="display:inline;cursor:pointer">
                                    Registrarse
                                </button>
                            </form>
                        </div>
                @endif
                </div>

    </div>
</div>