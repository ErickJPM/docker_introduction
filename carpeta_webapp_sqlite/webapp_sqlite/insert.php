<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>INSERTAR</title>
  </head>
  <body>
    <div class="mx-auto" style="width: 200px;">
      <h1 class="display-1">INSERTAR</h1>
    </div>
    <form method="POST" action="insert_process.php">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingresa el Nombre de persona">
      </div>
      <div class="form-group">
        <label for="correo">Email address:</label>
        <input type="email" name="correo" class="form-control" id="correo aria-describedby=" emailHelp" placeholder="Ingresa el correo">
      </div>
      <div class="form-group">
        <label for="telefono">Numero de Telefono:</label>
        <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Ingresa el numero de telefono">
      </div>
      <button type="submit" class="btn btn-success">INSERTAR</button>
    </form>
  </body>
</html>
