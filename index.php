<?php
    require_once ('model/conexion.php');
    
?>

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

  <div class="card">
  <div class="card-body">
  <form action="controller/crudControlador.php" method="POST">

  <div class="mb-3" >
    <label for="serial" class="form-label">Numero serial</label>
    <input type="text" class="form-control" id="serial" name="serial">
  </div>

  <div class="mb-3">
    <label for="placa" class="form-label">Placa</label>
    <input type="text" class="form-control" id="placa" name="placa">
  </div>

  <div class="mb-3">
    <label for="descripcion1" class="form-label">Descripcion de elemento</label>
    <input type="text" class="form-control" id="descripcion1" name="descripcion1">
  </div>

  <div class="mb-3">
    <label for="marca" class="form-label">Marca</label>
    <input type="text" class="form-control" id="marca" name="marca">
  </div>

  <div class="mb-3">
    <label for="modelo" class="form-label">Modelo</label>
    <input type="text" class="form-control" id="modelo" name="modelo">
  </div>

  <div class="mb-3">
    <label for="descripcion2" class="form-label">Descripcion Adicional</label>
    <input type="text" class="form-control" id="descripcion2" name="descripcion2">
  </div>

  <button type="submit" class="btn btn-primary">Agregar</button>
</form>
  </div>
</div>

    <br>

    <table class="table">
  <thead>
    <tr class="table-dark">
      <th scope="col">#</th>
      <th scope="col">Serial</th>
      <th scope="col">Placa</th>
      <th scope="col">Descripcion de elemento</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Descripcion adicional</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>

  
  <tbody>
  <?php 
  $consulta = "select * from aparato";
  $resultado=mysqli_query($conn, $consulta);
  if (mysqli_num_rows($resultado) > 0):?>
    <?php foreach ($resultado as $key => $value):?>
    <tr>
      <td><?php echo $value["idActivo"]?></td>
      <td><?php echo $value["NSerial"]?></td>
      <td><?php echo $value["placa"]?></td>
      <td><?php echo $value["descripElemento"]?></td>
      <td><?php echo $value["marca"]?></td>
      <td><?php echo $value["modelo"]?></td>
      <td><?php echo $value["descripAdicional"]?></td>
      <td><a href="views/actualizar.php?idActivo=<?php echo $value['idActivo']; ?>"><button type="button" class="btn btn-primary">editar</button></a></td>
      <td><button type="button" class="btn btn-danger">eliminar</button></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
      <p>No hay resultados en esta busqueda.</p>
      <?php endif; ?>
  </tbody>
</table>
<br>

    <button type="button">Generar reporte de entrega</button>

    </article>
    <script src="js/modal.js"></script>
</body>
</html>