<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary bg-gradient">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">Senasoft</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              @if(auth()->check() )


              @if(auth()->user()->role == 'admin')
              <li class="nav-item mx-3">
                <a class="nav-link text-white  " href=" {{ route('sondeos') }} ">Registrar Sondeos</a>
              </li>
              @endif
              @endif
              
              @if(auth()->check() )
              <li class="nav-item mx-3">
                <a class="nav-link text-white  " href=" {{ route('verSondeos') }} ">Ver Sondeos</a>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link text-white" href=" {{ route('registroCiudadano') }} ">Registro ciudadano</a>
              </li>
              @endif
            </ul>
            
          </div>
            @if(auth()->check())
            <div class=" p-0 m-0">
              <a  class="text-white text-decoration-none mx-3  ">Bienvenido  {{ auth()->user()->name }}  </a>
            </div>

           <div class=" p-0 m-0">
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button type="submit" class="text-white btn">Cerrar sesion</button>
            </form>
          </div>

          @else
          <div class=" p-0 m-0">
            <a class="float-end text-white " href=" {{ route('login') }} ">Iniciar Sesion</a>
        </div>
            @endif
          

        </div>
      </nav>

      <div class="container">
        @yield('contenido')
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>