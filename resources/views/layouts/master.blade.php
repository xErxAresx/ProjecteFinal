<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!--
     Bootstrap CSS -->
     <?PHP
      header('Access-Control-Allow-Origin: *');
      ?>
      @if (!empty($user))
        <script>
          window.App = {
            user: {!! json_encode($user) !!}
          }
        </script>
      @endif
      @if (!empty($users))
      <script>
          window.App = {
            users: {!! json_encode($users) !!}
          }
        </script>
      @endif
    
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
    <link rel="shortcut icon" href="https://images.emojiterra.com/google/android-10/128px/1f47b.png">
    <link rel="stylesheet" href="{{ URL::asset('css/mostrarTema.css')}} " integrity="">
    <link rel="stylesheet" href="{{ URL::asset('css/foro.css')}} " integrity="">
    <link rel="stylesheet" href="{{ URL::asset('css/master.css')}} " integrity="">
    <link rel="stylesheet" href="{{ URL::asset('css/registro.css')}} " integrity="">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}" integrity="">
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}" integrity="">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}" integrity="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>ForoJuegos</title>
  </head>
  <body>
    @include('partials.navbar')
    <div class="container">
    @yield('content')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Link del VUE -->
    <script src="https://cdn.jsdelivr.net/vue.resource/1.3.1/vue-resource.min.js"></script>
  </body>
</html>