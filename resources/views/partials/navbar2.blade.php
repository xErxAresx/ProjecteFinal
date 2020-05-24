<div class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}" style="color:#777"><span style="font-size:15pt">&#9876;</span> ForoJuegos </a>
        @if( Auth::check() )   
                <div class="top-right links botonesNavBar">
                    <div class="top-right links">
                        <a href="{{ url('/') }}">Home</a>
                        <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a> 
                </div>
            @else
            <div style="display:inline-block;" class="botonesNavBar">
            <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                            {{ csrf_field() }}
                            <div style="display:inline-block; margin-right: 2em;">
                                <a class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                    Iniciar Sesión
                                </a>
                            </div>
                            <div style="display:inline-block; margin-right: 1em;">
                                <a class="btn btn-link nav-link" style="display:inline;cursor:pointer" href="{{ url('/regis') }}"> 
                                    Registrarse
                                </a>
                            </div>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</div>