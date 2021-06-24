<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>VIEW</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="insert.php">
        INSERTAR
      </a>
    </nav>
  
    <div class="mx-auto" style="width: 200px;">
      <h1 class="display-1">REGISTROS</h1>
    </div>
    <table class="table">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Telefono</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $bd = new SQLite3('agenda.db');
    $results = $bd->query('SELECT * FROM personas');   
    while ($row = $results->fetchArray()) {
      echo'
        <tr>
            <td>'.$row["nombre"].'</td>
            <td>'.$row["email"].'</td>
            <td>'.$row["telefono"].'</td>
        </tr>';
        
    }
    ?>
    </tbody>
  </table>
  </body>
</html>
