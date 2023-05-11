<nav class="navbar navbar-expand-lg" style="background-color: #a6bfcf;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset ('logoIEP.png') }}" alt="IEP" width="65" height="60">
      </a>
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
              <li><a class="dropdown-item" href="/intro">Intro</a></li>
              <li><a class="dropdown-item" href="/historia">Historia</a></li>
              <li><a class="dropdown-item" href="/autoridades">Autoridades</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">-</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Institución
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/datos">Datos Informativos</a></li>
              <li><a class="dropdown-item" href="simbolos">Simbolos IEP</a></li>
              <li><a class="dropdown-item" href="/uniformes">Uniformes IEP</a></li>
              <li><a class="dropdown-item" href="/instalaciones">Instalaciones</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">-</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Académico
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/eva">EVA</a></li>
              <li><a class="dropdown-item" href="/sysNotas">Sistema de Notas</a></li>
              <li><a class="dropdown-item" href="/calif">Calificaciones</a></li>
              <li><a class="dropdown-item" href="/horario">Horario de clases</a></li>
              <li><a class="dropdown-item" href="/ofertaAcademica">Oferta Académica</a></li>
              <li><a class="dropdown-item" href="/consejoEst">Consejo Estudiantil</a></li>
              <li><a class="dropdown-item" href="/dece">DECE</a></li>
              <li><a class="dropdown-item" href="#">-</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">-</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contactenos">Contactenos</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li> --}}
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>