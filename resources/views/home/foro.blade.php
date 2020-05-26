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
                            <th class="tituloTabla" colspan="1">Titulo</th>
                            <th class="textoTabla">Tema</th>
                            <th></th>
                            <th></th>
                            <th class="autorfechaTabla">Fecha</th>
                        </tr>
                    </thead>
          
                    <tbody>
                        @foreach ($temas as $tema)
                        <tr>
                            <td >
                                <a href={{url('/foro/mostrar/'.$tema->id)}} >{{$tema->titulo}}</a>
                            </td>
                            <td colspan="3">
                                {{$tema->texto}}
                                @if (Auth::check() && Auth::user()->lvlAdmin >= 2)
                                <form class="form-inline my-2 my-lg-0" action="{{url('/foro/'.$tema->id.'/eliminarTema')}}" method="GET" style="float:right;">
                                    <button class="btn btn-warning my-2 my-sm-0" type="submit">Eliminar</button>
                                </form>
                                @endif
                            </td>
                            <td>
                                <a href={{url('/foro/perfil/'.$tema->user_id)}}> {{$tema->user->nombreUsuario}}</a> / {{$tema->fecha}}
                            </td>
                        </tr>
                        @endforeach
                      
                    </tbody>
                  
                </table>  
                <div>  
                    {{$temas->links()}}
                </div>
@stop