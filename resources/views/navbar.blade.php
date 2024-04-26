<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="https://www.cecep.edu.co/" style="margin-left: 10px;">FCECEP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('evento.index') }}">Evento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('participacion.index') }}">Participantes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('organizador.index') }}">Organizadores</a>
        </li>
      </ul>
    </div>
  </nav>