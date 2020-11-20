<!DOCTYPE html>
<html lang="en">
<head>
  <title>Practica 11</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<br><br><br>
<div class="container">
  <h2>Registro de practica</h2>
  <form action="{{route('registro')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="email">Nombre:</label>
      <input type="text" class="form-control" id="email" placeholder="Nombre" name="nombre">
    </div>
    <div class="form-group">
      <label for="email">Tipo:</label>
      <input type="text" class="form-control" id="email" placeholder="Tipo" name="tipo">
    </div>
    <div class="form-group">
      <label for="email">Materia:</label>
      <input type="text" class="form-control" id="email" placeholder="Materia" name="materia">
    </div>
    <button type="submit" class="btn btn-primary"><b>Registrar</b></button>
  </form>
</div>

</body>
</html>