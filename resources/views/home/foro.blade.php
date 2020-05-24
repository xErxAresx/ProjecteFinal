@extends('layouts.master')

@section('content')

        <div class="row" id="miRow">
            <div class="col-md-auto">
                <h2>Temas Actuales</h2>
            </div>
        </div>
        <table class="table">
        <thead>
            <tr>

                <th class="tituloTabla" colspan="1">Tiutlo</th>

                <th class="textoTabla">Cuerpo</th>
                <th></th>
                <th></th>
                <th class="autorfechaTabla">Autor y fecha</th>

            </tr>
        </thead>

        <tbody>
        @if ($temas!=null)
        @foreach( $temas as $tema )
        <tr>
            <td ><a href="{{ url('/foro/mostrar/' . $tema->id ) }}">{{ $tema->titulo }}</a></td>

            <td colspan="3">
                {{$tema->texto}}
                @if (Auth::check())
                    @if (Auth::user()->lvlAdmin >= 2)
                        <form method="GET" action=" {{ url('/foro/ '.$tema->id.'/eliminarTema')}}">
                            <button id="botonEditRespuesta" type="submit" class="btn btn-warning">
                                    Eliminar
                                </button>
                        </form>
                             
                    @endif
                @endif
                    
            </td>

            <td >
                @foreach ($users as $user)
                    @if ($user->id == $tema->user_id)
                        <a href="{{ url('/foro/perfil/'.$user->id)}}"> {{$user->nombreUsuario}} 
                    @endif
                @endforeach
            <br>   
            {{$tema->fecha}}
            </td>

        </tr>
    @endforeach
    @else
        <p>Lo siento pero actualmente no hay infomación</p>
    @endif
        
        </tbody>

    </table>
    
    
@stop