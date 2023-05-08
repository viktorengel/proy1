<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IEPomasqui</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    {{-- <h1>Hello, EcuaFix!</h1> --}}

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">IEP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Inicio</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="/nosotros">Nosotros</a>
            </li> --}}
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nosotros
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">IEP</a></li>
                <li><a class="dropdown-item" href="#">Historia</a></li>
                <li><a class="dropdown-item" href="#">Autoridades</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">-</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Institución
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Datos Informativos</a></li>
                <li><a class="dropdown-item" href="#">Simbolos IEP</a></li>
                <li><a class="dropdown-item" href="#">Uniformes IEP</a></li>
                <li><a class="dropdown-item" href="#">Instalaciones</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">-</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nosotros
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Entorno Virtual</a></li>
                <li><a class="dropdown-item" href="#">Sistema de Notas</a></li>
                <li><a class="dropdown-item" href="#">Calificaciones</a></li>
                <li><a class="dropdown-item" href="#">Horario de clases</a></li>
                <li><a class="dropdown-item" href="#">Oferta Académica</a></li>
                <li><a class="dropdown-item" href="#">Consejo Estudiantil</a></li>
                <li><a class="dropdown-item" href="#">DECE</a></li>
                <li><a class="dropdown-item" href="#">-</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">-</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contactenos</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li> --}}
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    @yield('principal')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

