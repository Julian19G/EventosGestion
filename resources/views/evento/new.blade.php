<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar Evento</title>
  </head>
  <body>
    <div class='container'>
    <h1>Agregar Evento</h1>

    <form method="POST" action="{{ route('evento.store') }}">
        @csrf


  <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id"
    disabled="disabled">
    <div id="idHelp" class="form-text">Id Evento</div>
  </div>
  
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" name="nombre"
    placeholder="Nombre Evento">
  </div>
  
  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="descripcion" aria-describedby="descripcionHelp" name="descripcion"
    placeholder="descripcion Evento">
  </div>
  <div class="mb-3">
  <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
  <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio">
</div>

<div class="mb-3">
  <label for="fecha_fin" class="form-label">Fecha Fin</label>
  <input type="date" class="form-control" id="fecha_fin" name="fecha_fin">
</div>

  
  <div class="mb-3">
    <label for="ubicacion" class="form-label">Ubicacion</label>
    <input type="text" class="form-control" id="ubicacion" aria-describedby="ubicacionHelp" name="ubicacion"
    placeholder="Ubicacion Organizador">
  </div>
  <div class="mt-3">
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{ route('evento.index') }}" class="btn btn-warning">Cancel</a>
</div>
</form>

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>