@extends('layouts.master')

@section('content')

<div class="container" >
	<div class="row" style="justify-content: center;">
<div class="col-md-9">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h4>Tu perfil</h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                        <form method="POST" action="{{ url('/foro/perfil/'.$user->id.'/editP') }}">
                            {{method_field('PUT')}}
                            {{ csrf_field() }}
                      <div class="form-group row">
                        <label for="username" class="col-4 col-form-label">Nombre actual: {{$user->nombre}}</label> 
                        <div class="col-8">
                        <input id="perfilNombre" id="nombre" name="nombre" class="form-control here" required="required" type="text" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Nombre de Usuario actual: {{$user->nombreUsuario}}</label> 
                        <div class="col-8">
                          <input id="perfilNombreU" id="nombreUsuario" name="nombreUsuario"  class="form-control here" type="text" >
                        </div>
                      </div>
          
                      <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email actual: {{$user->email}}</label> 
                        <div class="col-8">
                          <input id="perfilEmail" id="email" name="email" class="form-control here" required="required" type="text" >
                        </div>
                      </div>

                      <div class="form-group row">
                          <label for="email" class="col-4 col-form-label">Imagen actual (URL: {{$user->imagen}}) (Para la imagen introducir una URL): <img width="200" height="200" src="{{$user->imagen}}"></label> 
                          <div class="col-8">
                              <input id="perfilImagen" id="imagen" name="imagen" class="form-control here" placeholder="{{$user->imagen}}" required="required" type="text" > 
                          </div>
                        </div>
                      
                      <div class="form-group row">
                        <div class="offset-4 col-8">
                          <button id="editarPerfil" name="submit" type="submit" class="btn btn-primary">Editar</button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    
</div>
</div>
</div>
@stop