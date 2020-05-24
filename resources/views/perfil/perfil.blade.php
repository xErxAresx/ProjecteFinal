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
                  
                      <div class="form-group row">
                        <label for="username" class="col-4 col-form-label">Nombre</label> 
                        <div class="col-8">
                        <input id="nombre" name="username" placeholder="{{$user->nombre}}" class="form-control here" required="required" type="text" disabled>
                      
                        @for ($i = 0 ; $i < 100; ++$i)
                      
                        @endfor
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
                      @if (Auth::check() && Auth::user()->id == $user->id )
                      <form method="get" action="{{ url('/foro/perfil/'.Auth::user()->id.'/edit') }}">
                        <div class="form-group row">
                          <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Editar tu perfil</button>
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
                
                  @if (Auth::check() && Auth::user()->id)
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
                <h4>Tus respuestas</h4>
                <hr>
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

        componentDidMount() {
            var myRequest = new Request("http://localhost:8000/api/temas/user/"+window.App.user.id);
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
      
                      <th class="tituloTabla" colspan="1">Titulo</th>
      
                      <th class="textoTabla">Tema</th>
                      <th></th>
                      <th></th>
                      <th class="autorfechaTabla">Fecha</th>
      
                  </tr>
              </thead>
      
              <tbody>
                  
                {this.state.animus.map(animu => {
                  return(
                    <tr>
                    <td key={`animu-${animu.id}`}>
                      <a>{animu.titulo}</a>
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
    ReactDOM.render(
        <ListComponent />,
        document.getElementById('example1')
    );

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
                    console.log(data);
                    console.log(animus);
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
                  return(
                    <tr>
                    <td key={`animu-${animu.id}`}>
                      <a>{animu.tema_id.titulo}</a>
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