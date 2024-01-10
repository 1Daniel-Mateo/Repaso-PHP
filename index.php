<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Una pagina de pruebas php">
    <meta name="keywords" content="PHP, ejemplo con php, repaso">
    <meta name="author" content="Daniel Alvarez">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PDF PERSONALIZADO</title>
</head>
<body>
    <header>
    <h1>EJEMPLO DE GENERACION DE REPORTE</h1><br>
    <header>

    
        <article>
    <form action="">
        <label for=""></label>
        <input type="text">
        <label for=""></label>
        <input type="text">
        <label for=""></label>
        <input type="text">
        <label for=""></label>
        <input type="text">

        <button>Registrar</button>
    </form>
    <br>

    <?php
    include_once('conexion.php')

    $sql = "select idelectronicos,nombre,total from electronicos"
    ?>

    <table class="table">
  <thead>
    <tr class="table-dark">
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
<br>

    <button>Generar reporte de entrega</button>

    </article>
</body>
</html>