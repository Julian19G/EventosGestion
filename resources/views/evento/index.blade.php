<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Eventos</title>
  </head>

  <body>
  @include('navbar')
  <?php use Carbon\Carbon; ?>
    <div class="container">
    <h1>Listado de Eventos</h1>
    <a href="{{ route('evento.create') }}" class="btn btn-success">Agregar</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Ubicacion</th>
      <th scope="col">Fecha Inicio</th>
      <th scope="col">Fecha Fin</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($eventos as $evento)
    <tr>
      <th scope="row">{{ $evento->id }}</th>
      <td>{{ $evento->nombre }}</td>
      <td>{{ $evento->descripcion }}</td>
      <td>{{ $evento->ubicacion }}</td>
      <td>{{ Carbon::parse($evento->fecha_inicio)->format('d-m-Y') }}</td>       
       <td>{{ Carbon::parse($evento->fecha_fin)->format('d-m-Y') }}</td>        <td>       
     <a href="{{ route ('evento.edit', $evento->id) }}" class="btn btn-info">Editar</a>

<form action="{{ route('evento.destroy', $evento->id) }}" method="POST" style="display: inline-block;">
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