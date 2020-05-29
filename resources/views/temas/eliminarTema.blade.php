@extends('layouts.master')

@section('content')
<div id="eliminarContainer" class="card" >
        <div class="card-body">
                <form method="POST" action="{{ url ('/foro/'.$tema->id.'/eliminarTema')}}" >
                {{method_field('PUT')}}
                {{ csrf_field() }}
                    <div class="form-group">
                        <label style="text-align: center;">Titulo</label>
                        <p for="synopsis">{{$tema->titulo}}</p>
                        <label style="text-align: center;">Pregunta</label>
                        <p for="synopsis">{{$tema->texto}}</p>
                    </div>
                    <div class="form-group" >
                        <label for="synopsis" style="text-align: center;">Motivo de eliminacion</label>
                        <ul >
                            <li>
                                <input type="radio" id="Repetido" name="motivo" value="Repetido" required>El tema esta repetido
                            </li>
                            <li>
                                <input type="radio" id="Contenido Inadecutado" name="motivo" value="Contenido Inadecutado" required>El contenido no es adiente
                            </li>
                            <li>
                                <input type="radio" id="Mal Vocabulario" name="motivo" value="Mal Vocabulario" required>Las palabras o expresiones utilizadas no son las correctas
                           </li>
                           <li>
                                <input type="radio" id="Estupido" name="motivo" value="Estupido" required>El tema o pregunta es estupida
                            </li>
                            <li>
                                <input type="radio" id="Otro" name="motivo" value="Otro" required>Otro
                                <textarea id="otroMotivo" name="otroMotivo"></textarea>
                            </li>
                      </ul>
                   </div>
                   <div class="form-group">
                      <label for="fecha">Fecha</label>
                      <input type="date" name="fecha"  value="<?php echo date("Y-m-d");?>" disabled>
                   </div>
    
                   <div class="form-group text-center">
                      <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                         Eliminar Tema
                      </button>
                   </div>
              </form>
        </div>
</div>
@stop