<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar Participante</title>
  </head>
  <body>
    <div class='container'>
    <h1>Agregar Participante</h1>
    
    <form method="POST" action="{{ route('participacion.store') }}">
        @csrf
  <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id"
    disabled="disabled">
    <div id="idHelp" class="form-text">Id Participante</div>
  </div>

  
  <div class="mb-3">
    <label for="evento_id" class="form-label">Evento</label>
    <select class="form-control" id="evento_id" name="evento_id">
    @foreach ($eventos as $evento)
    <option value="{{ $evento->id }}">{{ $evento->nombre }} </option>
    @endforeach
      </select>
  </div>

  <div class="mb-3">
    <label for="organizador_id" class="form-label">Organizador</label>
    <select class="form-control" id="organizador_id" name="organizador_id">
    @foreach ($organizadores as $organizador)
    <option value="{{ $organizador->id }}">{{ $organizador->nombre }} </option>
    @endforeach
      </select>
  </div>

  
  <div class="mb-3">
    <label for="rol" class="form-label">rol</label>
    <input type="text" class="form-control" id="rol" aria-describedby="rolHelp" name="rol"
    placeholder="rol Evento">
  </div>
  <div class="mt-3">
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{ route('participacion.index') }}" class="btn btn-warning">Cancel</a>
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