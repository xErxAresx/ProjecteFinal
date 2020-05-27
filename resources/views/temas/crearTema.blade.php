@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Añadir Tema
         </div>
         <div class="card-body" style="padding:30px">
            <form method="POST">
            
            {{-- TODO: Abrir el formulario e indicar el método POST --}}

            {{-- TODO: Protección contra CSRF --}}
            {{ csrf_field() }}
               <div class="form-group">
                  <label for="titulo">Título</label>
                  <input id="tituloTema" type="text" name="titulo" id="title" class="form-control">
               </div>

               <div class="form-group">
                  <label for="synopsis">Texto</label>
                  <textarea id="textoTema" name="texto" id="texto" class="form-control" rows="3"></textarea>
               </div>

               <div class="form-group">
                  <label for="fecha">Fecha</label>
                  <input type="date" name="fecha"  value="<?php echo date("Y-m-d");?>" disabled>
               </div>

               <div class="form-group text-center">
                  <button id="botonCrearTema" type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                     Crear Tema
                  </button>
               </div>
            </form>
            {{-- TODO: Cerrar formulario --}}

         </div>
      </div>
   </div>
</div>

@stop