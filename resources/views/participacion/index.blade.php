<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Participantes</title>
  </head>

  <body>
  @include('navbar')
    <div class="container">
    <h1>Listado de Participantes</h1>
    <a href="{{ route('participacion.create') }}" class="btn btn-success">Agregar</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Id Evento</th>
      <th scope="col">Id Organizador</th>
      <th scope="col">rol</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($participaciones as $participacion)
    <tr>
      <th> <tr>
  <th scope="row">{{ $participacion->id }}</th>
  <td>{{ $participacion->evento->nombre ?? 'Sin evento' }}</td>
<td>{{ $participacion->organizador->nombre ?? 'Sin organizador' }}</td>
  <td>{{ $participacion->rol }}</td>
 
      <td>       
       <a href="{{ route ('participacion.edit', $participacion->id) }}" class="btn btn-info">Editar</a>

<form action="{{ route('participacion.destroy', $participacion->id) }}" method="POST" style="display: inline-block;">
@method('DELETE')
@csrf
<input class="btn btn-danger" type="submit" value="Delete"></td>
    </tr>
    @endforeach
  </tbody>
</table>
    <div>

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