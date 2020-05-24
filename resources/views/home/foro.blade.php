@extends('layouts.master')

@section('content')

        <div class="row" id="miRow">
            <div class="col-md-auto">
                <h2>Temas Actuales</h2>
            </div>
        </div>
        <div id="example1">
        </div>

<script type="text/babel">
        class ListComponent2 extends React.Component {
            constructor() {
                super()
                this.state = { animus: [] }
            }
    
            componentDidMount() {
                var myRequest = new Request("http://localhost:8000/api/temas");
                let animus = [];
    
                fetch(myRequest)
                    .then(response => response.json())
                    .then(data => {
                        this.setState({ animus: data })
                    })
            }
    
            render() {
                var id = window.App
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
                        var id = animu.id;
                        var ruta = "/foro/mostrar/"+id;
                        var ruta2 = "/foro/perfil/";
                        var users = window.App.users;
                        var nombreUser = "";
                        for (let i = 0; i < users.length; i++) {
                            if (animu.user_id == users[i].id) {
                                nombreUser = users[i].nombreUsuario;
                                ruta2 = ruta2+users[i].id;
                            } 
                        }
                      return(
                        <tr>
                        <td key={`animu-${animu.id}`}>
                        <a href={ruta} >{animu.titulo}</a>
                        </td>
                        <td colspan="3">
                          {animu.texto}
                        </td>
                        <td>
                          <a href={ruta2}> {nombreUser}</a> / {animu.fecha}
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
            document.getElementById('example1')
        );
    </script>
    
@stop