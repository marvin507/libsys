
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Biblioteca</title>
     
    <!-- Bootstrap core CSS -->
    
    
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Sistema Bibliotecario</a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="/logout" onclick="return confirm('¿Cerrar Sesión de {{Auth()->user()->name}}?')" >Cerrar Sesión de {{Auth()->user()->name}}</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/panel">
                  <span data-feather="home"></span>
                  Inicio
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('autores.index')}}">
                  <span data-feather="file"></span>
                  Autores
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('libros.index')}}">
                  <span data-feather="shopping-cart"></span>
                  Libros
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('clientes.index')}}">
                  <span data-feather="shopping-cart"></span>
                  Clientes
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('ordenes.index')}}">
                  <span data-feather="shopping-cart"></span>
                  Ordenes
                </a>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Papelera</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('autor.borrado')}}">Autores</a>
                    <a class="dropdown-item" href="#">Libros</a>
                    <a class="dropdown-item" href="{{route('cliente.borrado')}}">Clientes</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </li>

              <li class="nav-item">
                <a class="nav-link" href="">
                  <span data-feather="shopping-cart"></span>
                  Usuarios
                </a>
              </li>
              
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            
            </div>
          @yield('contenido')
          
        </main>
      </div>
    </div>
    
    <script src="/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js "></script>
    <script src="/js/alerts.js"></script>
  
    <script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>   
  </body>
</html>