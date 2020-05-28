@extends('layouts.master')

@section('content')

<div class="container" >
	<div class="row" style="justify-content: center;">
<div class="col-md-9">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    @if (Auth::check() && Auth::user()->id == $user->id)
                  <h4>Tu perfil</h4>
                  <hr>
                  @else
                  <h4>Su perfil</h4>
                  <hr>
                  @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                  
                      <div class="form-group row">
                        <label for="username" class="col-4 col-form-label">Nombre</label> 
                        <div class="col-8">
                        <input id="nombre" name="username" placeholder="{{$user->nombre}}" class="form-control here" required="required" type="text" disabled>

                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Nombre de Usuario</label> 
                        <div class="col-8">
                        <input id="nombreUsuario" name="name" placeholder="{{$user->nombreUsuario}}" class="form-control here" type="text" disabled>
                        </div>
                      </div>
          
                      <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email</label> 
                        <div class="col-8">
                        <input id="email" name="email" placeholder="{{$user->email}}" class="form-control here" required="required" type="text" disabled>
                        </div>
                      </div>

                      <div class="form-group row">
                          <label for="imagen" class="col-4 col-form-label">Imagen</label> 
                          <div class="col-4">
                          <img width="200" height="200" src="{{$user->imagen}}">
                         
                          </div>
                        </div>
                      @if (Auth::check() && Auth::user()->id == $user->id )
                      <form method="get" action="{{ url('/foro/perfil/'.Auth::user()->id.'/edit') }}">
                        <div class="form-group row">
                          <div class="offset-4 col-8">
                            <button id="botonEditarPerfil" name="submit" type="submit" class="btn btn-primary">Editar tu perfil</button>
                          </div>
                        </div>
                      </form>
                      @endif
                </div>
            </div>
        </div>
    </div>
    <div class="card">
      <div class="card-body">
          <div class="row">
              <div class="col-md-12">
                
                  @if (Auth::check() && Auth::user()->id == $user->id)
                  <h4>Tus temas</h4>
                  <hr>
                  @else
                  <h4>Sus temas</h4>
                  <hr>
                  @endif
                  <div id="app" class="content"><!--La equita id debe ser app, como hemos visto en app.js-->
                    <example-component></example-component><!--Añadimos nuestro componente vuejs-->
                </div>
            <script src="{{asset('js/app.js')}}"></script> <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
              </div>
          </div>
          <div id="example1">

          </div>
          
        
      </div>
  </div>

  <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                @if (Auth::check() && Auth::user()->id == $user->id)
                  <h4>Tus respuestas</h4>
                  <hr>
                  @else
                  <h4>Sus respuestas</h4>
                  <hr>
                  @endif
            </div>
        </div>
        <div id="example2">
          
        </div>
      
    </div>
</div>
</div>
</div>
</div>
<script type="text/babel">
    class ListComponent extends React.Component {
        constructor() {
            super()
            this.state = { animus: [] }
        }
        //Quan el component es munta fem una request a la api i agafem tots els temas de l'usuari
        componentDidMount() {
            var myRequest = new Request("http://localhost:8000/api/temas/user/"+window.App.user.id); //La variable window.App.user.id es una variable global transformada a json
            let animus = [];
            //Agafem tota la informació
            fetch(myRequest)
                .then(response => response.json())
                .then(data => {
                    this.setState({ animus: data })
                })
        }
        //En el render posarem el que per aixi dir-ho retornarem
        render() {
            return (
              //Creem l'estructura que plasmara en el nostre HTML
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
                
                {this.state.animus.map(animu => {
                  //map es la funció igualitaria a foreach en React
                  //Mostrem l'informació que necessitem
                  //Amb aquesta variable guardem la ruta del tema
                  var rutaMostrar = "/foro/mostrar/"+animu.id;
                  return(
                    <tr>
                    <td key={`animu-${animu.id}`}>
                      <a class="linksPerfil" href={rutaMostrar}>{animu.titulo}</a>
                    </td>
                    <td colspan="3">
                      {animu.texto}
                    </td>
                    <td>
                      {window.App.user.nombreUsuario} / {animu.fecha}
                    </td>
                  </tr>
                  )            
                })}
              </tbody>
          </table>
              
            )
        }
    }
    //Mitjançant DOM agafem i mostrem l'informació agafant l'id de l'element
    ReactDOM.render(
        <ListComponent />,
        document.getElementById('example1')
    );

    //Es el que l'anterior pero per les respostes
    class ListComponent2 extends React.Component {
        constructor() {
            super()
            this.state = { animus: [] }
        }

        componentDidMount() {
            var myRequest = new Request("http://localhost:8000/api/respuestas/user/"+window.App.user.id);
            let animus = [];

            fetch(myRequest)
                .then(response => response.json())
                .then(data => {
                    this.setState({ animus: data })
                })
        }

        render() {
            return (

              <table class="table">
              <thead>
                  <tr>
                      <th class="tituloTabla" colspan="1">Link Tema</th>
                      <th class="textoTabla">Respuesta</th>
                      <th></th>
                      <th></th>
                      <th class="autorfechaTabla">Fecha</th>
      
                  </tr>
              </thead>
              <tbody>
                  
                {this.state.animus.map(animu => {
                  var rutaMostrar = "/foro/mostrar/"+animu.tema_id;
                  return(
                    <tr>
                    <td key={`animu-${animu.id}`}>
                      <a class="linksPerfil" href={rutaMostrar}>Link</a>
                    </td>
                    <td colspan="3">
                      {animu.respuesta}
                    </td>
                    <td>
                      {window.App.user.nombreUsuario} / {animu.fecha}
                    </td>
                  </tr>
                  )
                                
                        })}
              
              </tbody>
          </table>
              
            )
        }
    }
    ReactDOM.render(
        <ListComponent2 />,
        document.getElementById('example2')
    );
</script>

@stop