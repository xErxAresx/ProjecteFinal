@extends('layouts.master')

@section('content')

<div class="row" id="miRow">
    <div class="col">
            <div class="col-md-auto">
                <h2>{{$tema->titulo}}</h2>
            </div>
        </div>
        <table class="table">
        <thead>
            <tr>

                <th colspan="4" class="textoTabla">{{$tema->texto}}</th>
                <th colspan="2" style="justify-content:center;text-align:center;" class="autorfechaTabla">{{$tema->user->nombreUsuario}} / {{$tema->fecha}}</th>

            </tr>
        </thead>

        <tbody>
        @foreach ($respuestas as $respuesta)
          @if ($respuesta->tema_id == $tema->id)
          <tr>
            <td colspan="4">{{$respuesta->respuesta}}
            @if (Auth::check())
            @if (Auth::user()->id == $respuesta->user_id)
            
            <button id="botonEditRespuesta" type="button" class="btn btn-warning" data-toggle="modal" data-target="#editRespuesta">
              Editar
            </button>
          @endif
            @endif
            </td>
          <td style="justify-content:center;text-align:center; colspan="2"><a href={{ url('/foro/perfil/'.$respuesta->user->id)}}>{{$respuesta->user->nombreUsuario}}</a> / {{$respuesta->fecha}}</td>
          </tr>
          @endif

        @endforeach
            {{$respuestas->links()}}
        </tbody>
        </table>
    </div>
    @if (Auth::check())
    <div class="col">
      <button id="botonRespuesta" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <span class="glyphicon glyphicon-plus"> </span> Añadir respuesta
      </button>
  </div>
    @endif
    
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Respuesta</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action=" {{ url ('/foro/mostrar/'.$tema->id.'/crearRespuesta')}} ">
                {{ csrf_field() }}
                  <div class="form-group">
                      <label for="synopsis">Pregunta</label>
                      <p name="pregunta" class="form-control" rows="3"> {{$tema->texto}} </p>
                   </div>
                   <div class="form-group">
                      <label for="synopsis">Respuesta</label>
                      <textarea name="texto" id="texto" class="form-control" rows="3"></textarea>
                   </div>
    
                   <div class="form-group">
                      <label for="fecha">Fecha</label>
                      <input type="date" name="fecha"  value="<?php echo date("Y-m-d");?>" disabled>
                   </div>
    
                   <div class="form-group text-center">
                      <button id="añadirRes" type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                         Añadir respuesta
                      </button>
                   </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="editRespuesta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Respuesta</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action=" {{ url ('/foro/mostrar/'.$tema->id.'/editarRespuesta/')}} ">
                {{method_field('PUT')}}
                {{ csrf_field() }}
                  <div>
                      <label for="synopsis">Antigua respuesta</label>
                  <textarea name="texto" id="texto" class="form-control" rows="3">
                    
                  </textarea>
                  </div>
                   <div class="form-group">
                      <label for="synopsis">Nueva respuesta</label>
                      <textarea name="texto" id="texto" class="form-control" rows="3"></textarea>
                   </div>
                   <div class="form-group">
                      <label for="fecha">Fecha</label>
                      <input type="date" name="fecha"  value="<?php echo date("Y-m-d");?>" disabled>
                   </div>
    
                   <div class="form-group text-center">
                      <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                         Editar Respuesta
                      </button>
                   </div>
              </form>
            </div>
          </div>
        </div>
      </div>


@stop